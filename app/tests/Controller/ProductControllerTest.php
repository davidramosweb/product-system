<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use App\Document\Product;

class ProductControllerTest extends WebTestCase
{
    /**
     * @var Product
     */
    protected $product;

    /**
     * @var DocumentManager
     */
    protected $dm;

    protected function setUp(): void
    {
        parent::setUp();

        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->dm = static::$kernel->getContainer()
            ->get('doctrine_mongodb')
            ->getManager();

        $this->product = new Product();
        $this->product->setSku('AA-123456');
        $this->product->setEan13('1234567890123');
        $this->product->setProductEans(['1234567890123', '3210987654321']);
        $this->product->setStock(42);
        $this->product->setName('Product Test');
        $this->product->setDescription('Testing a product');

        $this->dm->persist($this->product);
        $this->dm->flush();
    }

    public function testGetProducts(): void
    {

        $client = static::createClient();

        $crawler = $client->request('GET', '/products');

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse();
        $this->assertJsonResponse($response);
        $responseData = json_decode($response->getContent(), true);

        $this->assertArrayHasKey('id', $responseData[0]);
        $this->assertArrayHasKey('sku', $responseData[0]);
        $this->assertArrayHasKey('ean13', $responseData[0]);
        $this->assertArrayHasKey('eanVirtual', $responseData[0]);
        // ...
    }

    public function testGetProductById(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/' . $this->product->getId());

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse();
        $this->assertJsonResponse($response);
        $responseData = json_decode($response->getContent(), true);

        $this->assertArrayHasKey('id', $responseData);
        $this->assertEquals($this->product->getId(), $responseData['id']);
        $this->assertArrayHasKey('sku', $responseData);
        $this->assertEquals('AA-123456', $responseData['sku']);
        $this->assertArrayHasKey('ean13', $responseData);
        $this->assertEquals('1234567890123', $responseData['ean13']);
        $this->assertArrayHasKey('eanVirtual', $responseData);
        // ...
    }

    public function testGetProductByEan13(): void
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/product/ean13/1234567890123');

        $this->assertResponseIsSuccessful();
        $response = $client->getResponse();
        $this->assertJsonResponse($response);
        $responseData = json_decode($response->getContent(), true);

        $this->assertArrayHasKey('id', $responseData);
        $this->assertArrayHasKey('sku', $responseData);
        $this->assertEquals('AA-123456', $responseData['sku']);
        $this->assertArrayHasKey('ean13', $responseData);
        $this->assertEquals('1234567890123', $responseData['ean13']);
        $this->assertArrayHasKey('eanVirtual', $responseData);
        // ...
    }



    protected function assertJsonResponse($response)
    {
        $this->assertTrue(
            $response->headers->contains('Content-Type', 'application/json'),
            $response->headers
        );
    }
}
