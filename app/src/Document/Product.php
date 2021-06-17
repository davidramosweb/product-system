<?php

namespace App\Document;

use App\Model\ProductSystemInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\PersistentCollection;
use Symfony\Component\Validator\Constraints as Assert;
use App\Document\ProductAttribute;

/**
 * @MongoDB\Document
 */
class Product implements ProductSystemInterface
{
    /**
     * @MongoDB\Id
     */
    private $id;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $sku;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $ean13;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $eanVirtual;

    /**
     * @MongoDB\Field(type="collection")
     * @Assert\NotBlank()
     */
    protected $eans;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $stock;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $stockCatalog;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $stockToShow;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $stockAvailable;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $categoryName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $brandName;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $partNumber;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $collection;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $priceCatalog;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $priceWholesale;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $priceRetail;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $pvp;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $discount;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $weight;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $height;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $width;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $length;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $weightPackaging;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $lengthPackaging;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $heightPackaging;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $widthPackaging;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $weightMaster;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $lengthMaster;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $heightMaster;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $widthMaster;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $productLangsSupplier;

    /**
     * @MongoDB\Field(type="collection")
     */
    protected $productImages;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $tax;

    /**
     * @MongoDB\EmbedMany(targetDocument=ProductAttribute::class)
     */
    protected $productAttributes = [];

    /**
     * @MongoDB\Field(type="int")
     */
    protected $unitBox;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $unitPalet;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $assortment;

    /**
     * @MongoDB\Field(type="int")
     */
    protected $minSalesUnit;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setEan13(?string $ean13)
    {
        $this->ean13 = $ean13;
    }

    public function getEan13(): ?string
    {
        return $this->ean13;
    }

    public function setEanVirtual(?string $eanVirtual)
    {
        $this->eanVirtual = $eanVirtual;
    }

    public function getEanVirtual(): ?string
    {
        return $this->eanVirtual;
    }

    public function setProductEans(array $eans)
    {
        $this->eans = $eans;
    }

    public function getProductEans(): array
    {
        return $this->eans;
    }

    public function setStock(int $stock)
    {
        $this->stock = $stock;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStockCatalog(int $stockCatalog)
    {
        $this->stockCatalog = $stockCatalog;
    }

    public function getStockCatalog(): ?int
    {
        return $this->stockCatalog;
    }

    public function setStockToShow(?int $stockToShow)
    {
        $this->stockToShow = $stockToShow;
    }

    public function getStockToShow(): ?int
    {
        return $this->stockToShow;
    }

    public function setStockAvailable(?int $stockAvailable)
    {
        $this->stockAvailable = $stockAvailable;
    }

    public function getStockAvailable(): ?int
    {
        return $this->stockAvailable;
    }

    public function setCategoryName(?string $categoryName)
    {
        $this->categoryName = $categoryName;
    }

    public function getCategoryName(): ?string
    {
        return $this->categoryName;
    }

    public function setBrandName(?string $brandName)
    {
        $this->brandName = $brandName;
    }

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setPartNumber(?string $partNumber)
    {
        $this->partNumber = $partNumber;
    }

    public function getPartNumber(): ?string
    {
        return $this->partNumber;
    }

    public function setCollection(?string $collection)
    {
        $this->collection = $collection;
    }

    public function getCollection(): ?string
    {
        return $this->collection;
    }

    public function setPriceCatalog(float $priceCatalog)
    {
        $this->priceCatalog = $priceCatalog;
    }

    public function getPriceCatalog(): ?float
    {
        return $this->priceCatalog;
    }

    public function setPriceWholesale(?float $priceWholesale)
    {
        $this->priceWholesale = $priceWholesale;
    }

    public function getPriceWholesale(): ?float
    {
        return $this->priceWholesale;
    }

    public function setPriceRetail(?float $priceRetail)
    {
        $this->priceRetail = $priceRetail;
    }

    public function getPriceRetail(): ?float
    {
        return $this->priceRetail;
    }

    public function setPvp(?float $pvp)
    {
        $this->pvp = $pvp;
    }

    public function getPvp(): ?float
    {
        return $this->pvp;
    }

    public function setDiscount(float $discount)
    {
        $this->discount = $discount;
    }

    public function getDiscount(): ?float
    {
        return $this->discount;
    }

    public function setWeight(float $weight)
    {
        $this->weight = $weight;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setHeight(float $height)
    {
        $this->height = $height;
    }

    public function getHeight(): ?float
    {
        return $this->height;
    }

    public function setWidth(float $width)
    {
        $this->width = $width;
    }

    public function getWidth(): ?float
    {
        return $this->width;
    }

    public function setLength(float $length)
    {
        $this->length = $length;
    }

    public function getLength(): ?float
    {
        return $this->length;
    }

    public function setWeightPackaging(float $weightPackaging)
    {
        $this->weightPackaging = $weightPackaging;
    }

    public function getWeightPackaging(): ?float
    {
        return $this->weightPackaging;
    }

    public function setLengthPackaging(float $lengthPackaging)
    {
        $this->lengthPackaging = $lengthPackaging;
    }

    public function getLengthPackaging(): ?float
    {
        return $this->lengthPackaging;
    }

    public function setHeightPackaging(float $heightPackaging)
    {
        $this->heightPackaging = $heightPackaging;
    }

    public function getHeightPackaging(): ?float
    {
        return $this->heightPackaging;
    }

    public function setWidthPackaging(float $widthPackaging)
    {
        $this->widthPackaging = $widthPackaging;
    }

    public function getWidthPackaging(): ?float
    {
        return $this->widthPackaging;
    }

    public function setWeightMaster(float $weightMaster)
    {
        $this->weightMaster = $weightMaster;
    }

    public function getWeightMaster(): ?float
    {
        return $this->weightMaster;
    }

    public function setLengthMaster(float $lengthMaster)
    {
        $this->lengthMaster = $lengthMaster;
    }

    public function getLengthMaster(): ?float
    {
        return $this->lengthMaster;
    }

    public function setHeightMaster(float $heightMaster)
    {
        $this->heightMaster = $heightMaster;
    }

    public function getHeightMaster(): ?float
    {
        return $this->heightMaster;
    }

    public function setWidthMaster(float $widthMaster)
    {
        $this->widthMaster = $widthMaster;
    }

    public function getWidthMaster(): ?float
    {
        return $this->widthMaster;
    }

    public function setName(?string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setDescription(?string $description)
    {
        $this->description = $description;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setProductLangsSupplier(array $productLangsSupplier)
    {
        $this->productLangsSupplier = $productLangsSupplier;
    }

    /** @return ProductLang[] */
    public function getProductLangsSupplier(): ?array
    {
        return $this->productLangsSupplier;
    }

    public function setProductImages(array $productImages)
    {
        $this->productImages = $productImages;
    }

    public function getProductImages(): array
    {
        return ($this->productImages) ? $this->productImages : [];
    }

    public function setTax(float $tax)
    {
        $this->tax = $tax;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setProductAttributes(array $productAttributes)
    {
        $this->productAttributes = $productAttributes;
    }

    /** @return ProductAttribute[] */
    public function getProductAttributes()
    {
        return $this->productAttributes;
    }

    public function addProductAttribute(ProductAttribute $productAttribute)
    {
        $store = true;
        if ($this->productAttributes) {
            foreach ($this->productAttributes as $storedProductAttribute) {
                if ($storedProductAttribute == $productAttribute) {
                    $store = false;
                    break;
                }
            }
        }
        if ($store) {
            $this->productAttributes[] = $productAttribute;
        }
    }

    public function setUnitBox(int $unitBox)
    {
        $this->unitBox = $unitBox;
    }

    public function getUnitBox(): ?int
    {
        return $this->unitBox;
    }

    public function setUnitPalet(int $unitPalet)
    {
        $this->unitPalet = $unitPalet;
    }

    public function getUnitPalet(): ?int
    {
        return $this->unitPalet;
    }

    public function setAssortment(?int $assortment)
    {
        $this->assortment = $assortment;
    }

    public function getAssortment(): ?int
    {
        return $this->assortment;
    }

    public function setMinSalesUnit(?int $minSalesUnit)
    {
        $this->minSalesUnit = $minSalesUnit;
    }

    public function getMinSalesUnit(): ?int
    {
        return $this->minSalesUnit;
    }
}
