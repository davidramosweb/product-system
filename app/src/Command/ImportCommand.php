<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpClient\Response\CurlResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\String\UnicodeString;
use Psr\Log\LoggerInterface;
use Doctrine\ODM\MongoDB\DocumentManager;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Document\Product;
use App\Document\ProductAttribute;
use App\Dto\ArticuloDto;
use App\Dto\CatalogDto;
use App\Dto\ProductoDto;

class ImportCommand extends Command
{
    protected static $defaultName = 'app:import';

    /**
     * @var array
     */
    public $externalResources;

    /**
     * @var HttpClientInterface
     */
    private $client;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * @var DocumentManager
     */
    private $dm;

    /**
     * @var ValidatorInterface
     */
    private $validator;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var array
     */
    private $detectedChanges;

    /**
     * ImportCommand constructor
     *
     * @param array $externalResources
     * @param HttpClientInterface $client
     * @param SerializerInterface $serializer
     * @param DocumentManager $dm
     * @param ValidatorInterface $validator
     * @param LoggerInterface $logger
     */
    public function __construct(
        array $externalResources,
        HttpClientInterface $client,
        SerializerInterface $serializer,
        DocumentManager $dm,
        ValidatorInterface $validator,
        LoggerInterface $logger
    ) {
        $this->externalResources = $externalResources;
        $this->client = $client;
        $this->serializer = $serializer;
        $this->dm = $dm;
        $this->validator = $validator;
        $this->logger = $logger;
        $this->detectedChanges = [];
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->setDescription('Import all external resources and update it in the database.');
    }

    /**
     * Execute the command
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return integer
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->output = $output;
        $output->writeln('Starting import job.');
        $output->writeln(date('H:i:s d-m-Y'));

        foreach ($this->externalResources as $externalResource) {
            switch ($externalResource['type']) {
                case 'articulos':
                    $output->writeln('Importing Articulos...');
                    $this->processArticulos($externalResource);
                    break;
                case 'catalog':
                    $output->writeln('Importing Catalog...');
                    $this->processCatalog($externalResource);
                    break;
                case 'productos':
                    $output->writeln('Importing Productos...');
                    $this->processProductos($externalResource);
                    break;
            };
        }

        $this->reportDetectedChanges();

        $output->writeln('Import finished.');
        return Command::SUCCESS;
    }

    /**
     * Process source Articulos.xml
     *
     * @param array $externalResource
     * @return void
     */
    public function processArticulos(array $externalResource)
    {
        try {
            $response = $this->getFromAPI($externalResource['src']);
            $xml = new \SimpleXMLElement($response->getContent());
            $json = json_encode($xml);
            $array = json_decode($json, TRUE);
            $content = json_encode($array['Articulo']);

            $articulos = $this->serializer->deserialize($content, 'App\Dto\ArticuloDto[]', 'json', [
                'as_collection' => true
            ]);

            foreach ($articulos as $articulo) {
                $this->importArticulo($articulo);
            }
        } catch (\Exception $error) {
            $this->logger->error((string) $error);
        }
    }

    /**
     * Map data from ArticuloDto to Product and import it into database
     *
     * @param ArticuloDto $articulo
     * @return void
     */
    public function importArticulo(ArticuloDto $articulo)
    {
        if (!$product = $this->dm->getRepository(Product::class)->findOneBy(['eans' => $articulo->getCodigoBarras()])) {
            $product = new Product();
        }

        $product->setSku($articulo->getCodigo());
        $product->setDescription($articulo->getDescripcion());
        $product->setEan13($articulo->getCodigoBarras());
        $product->setPvp($articulo->getPrecio());
        $product->setPriceRetail($articulo->getPrecioBase());
        $product->setAssortment($articulo->getSurtido());
        $product->setMinSalesUnit($articulo->getVMD());
        $product->setStock($articulo->getCantidad());
        $product->setStockCatalog($articulo->getStockReal());
        $product->setStockToShow($articulo->getStockTeorico());
        $product->setStockAvailable($articulo->getStockDisponible());
        $product->setProductEans([$articulo->getCodigoBarras()]);

        $this->importProduct($product);
    }

    /**
     * Process source catalog.json
     *
     * @param array $externalResource
     * @return void
     */
    public function processCatalog($externalResource)
    {
        try {
            $response = $this->getFromAPI($externalResource['src']);
            $array = $response->toArray();
            $content = json_encode($array['Data']);
            $catalogs = $this->serializer->deserialize($content, 'App\Dto\CatalogDto[]', 'json', [
                'as_collection' => true
            ]);
            foreach ($catalogs as $catalog) {
                $this->importCatalog($catalog);
            }
        } catch (\Exception $error) {
            $this->logger->error((string) $error);
        }
    }

    /**
     * Map data from CatalogDto to Product and import it into database
     *
     * @param CatalogDto $catalog
     * @return void
     */
    public function importCatalog(CatalogDto $catalog)
    {
        $productAttributes = [];
        if ($attributes = $catalog->getAttributes()) {
            foreach ($attributes as $attribute) {
                $productAttribute = new ProductAttribute();
                $productAttribute->setId($attribute['Attribute_ID']);
                $productAttribute->setName($attribute['Attribute_Name']);
                $productAttribute->setValue($attribute['Attribute_Value']);
                $productAttributes[] = $productAttribute;
            }
        }

        if (!$product = $this->dm->getRepository(Product::class)->findOneBy(['eans' => $catalog->getEans()])) {            
            $product = new Product();
        }
        $product->setSku($catalog->getSkuProvider());
        $product->setEan13($catalog->getFirstEan());
        $product->setDescription($catalog->getProviderFullDescription());
        $product->setName($catalog->getProviderName());
        $product->setBrandName($catalog->getBrandSupplierName());
        $product->setCategoryName($catalog->getCategorySupplierName());
        $product->setWidthPackaging($catalog->getWidthPackaging());
        $product->setHeightPackaging($catalog->getHeightPackaging());
        $product->setLengthPackaging($catalog->getLengthPackaging());
        $product->setWeightPackaging($catalog->getWeightPackaging());

        $product->setProductImages($catalog->getImages());
        $product->setProductEans([$catalog->getEans()]);

        $this->importProduct($product, $productAttributes);
    }

    /**
     * Process source Productos.xlsx
     *
     * @param array $externalResource
     * @return void
     */
    public function processProductos($externalResource)
    {
        $finder = new Finder();
        foreach ($finder->in($externalResource['src']) as $file) {
            $contents = $file->getContents();
            $tempFile = '/tmp/tempFile';
            file_put_contents($tempFile, $contents);
            $spreadsheet = IOFactory::load($tempFile);
            $worksheet = $spreadsheet->getActiveSheet();
            $firstRow = true;
            $headers = [];
            foreach ($worksheet->getRowIterator() as $row) {
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(FALSE);

                if ($firstRow) {
                    $firstRow = false;
                    $headers = [];
                    foreach ($cellIterator as $key => $cell) {
                        $headers[$key] = $cell->getValue();
                    }
                } else {
                    $rowValues = [];
                    foreach ($cellIterator as $key => $cell) {
                        $rowKey = (new UnicodeString($headers[$key]))->camel()->title()->__toString();
                        $rowValues[$rowKey] = $cell->getValue();
                    }
                    try {
                        $content = json_encode($rowValues);
                        $producto = $this->serializer->deserialize($content, ProductoDto::class, 'json', [
                            ObjectNormalizer::DISABLE_TYPE_ENFORCEMENT => true
                        ]);
                        $this->importProducto($producto);
                    } catch (\Exception $error) {
                        $this->logger->error((string) $error);
                    }
                }
            }
        }
    }

    /**
     * Map data from ProductDto to Product and import it into database
     *
     * @param ProductoDto $producto
     * @return void
     */
    public function importProducto(ProductoDto $producto)
    {
        $productAttributes = [];
        if ($attributes = $producto->getAttributes()) {
            foreach ($attributes as $attribute) {
                $productAttribute = new ProductAttribute();
                $productAttribute->setId($attribute['id']);
                $productAttribute->setName($attribute['name']);
                $productAttribute->setValue($attribute['value']);
                $productAttributes[] = $productAttribute;
            }
        }

        if (!$product = $this->dm->getRepository(Product::class)->findOneBy(['eans' => $producto->getEan()])) {
            $product = new Product();
        }
        $product->setSku($producto->getSkuProvider());
        $product->setEan13($producto->getEan());
        $product->setDescription($producto->getDescription());
        $product->setName($producto->getProviderName());
        $product->setBrandName($producto->getBrandSupplierName());
        $product->setCategoryName($producto->getCategoryName());
        $product->setWidth($producto->getWidth());
        $product->setHeight($producto->getHeight());
        $product->setLength($producto->getLength());
        $product->setWeight($producto->getWeightKg());
        $product->setWidthPackaging($producto->getWidthPackaging());
        $product->setHeightPackaging($producto->getHeightPackaging());
        $product->setLengthPackaging($producto->getLengthPackaging());
        $product->setWeightPackaging($producto->getWeightPackaging());
        $product->setProductEans([$producto->getEan()]);

        $this->importProduct($product, $productAttributes);
    }

    /**
     * Import a Product to the database
     *
     * @param Product $product
     * @param array $productAttributes
     * @return void
     */
    public function importProduct(Product $product, ?array $productAttributes = [])
    {
        if (
            !empty($productAttributes) &&
            $this->serializer->serialize($productAttributes, 'json') !==
            $this->serializer->serialize($product->getProductAttributes(), 'json')
        ) {
            $product->setProductAttributes($productAttributes);
        }

        $errors = $this->validator->validate($product);

        if (count($errors) > 0) {
            $this->logger->error((string) $errors);
        } else {
            $this->detectChanges($product);
            $this->dm->persist($product);
            $this->dm->flush();
        }
    }

    /**
     * Get the response from an external api
     *
     * @param string $src
     * @return CurlResponse
     */
    public function getFromAPI(string $src): CurlResponse
    {
        $response = $this->client->request('GET', $src);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception("Connection problem with external API: $src");
        }
        return $response;
    }

    /**
     * Stores the changes produced in the product
     *
     * @param Product $product
     * @return void
     */
    public function detectChanges(Product $product)
    {
        $uow = $this->dm->getUnitOfWork();
        $uow->computeChangeSets();
        if ($changeset = $uow->getDocumentChangeSet($product)) {
            foreach ($changeset as $key => $value) {
                $this->detectedChanges[$product->getId()][$key] = $value;
            }
        }
    }

    /**
     * Report changes to an external system
     *
     * @return void
     */
    public function reportDetectedChanges()
    {
        if (!empty($this->detectedChanges)) {


            /* * * * * * * * * * * * * * * * 
            * Ejemplo para notificar a una API externa
            * * * * * * * * * * * * * * * * * 

            $response = $this->client->request('POST', 'https://...', [
                'json' => $this->detectedChanges,
            ]);
            */

            /* * * * * * * * * * * * * * * * 
            * Ejemplo para notificar a por email
            * * * * * * * * * * * * * * * * * 

            $message = (new \Swift_Message('Cambios detectados en product-system'))
                ->setFrom('send@example.com')
                ->setTo('recipient@example.com')
                ->setBody(json_encode($this->detectedChanges));
            $this->mailer->send($message);
            */

            $this->output->writeln(json_encode($this->detectedChanges));
        }
    }
}
