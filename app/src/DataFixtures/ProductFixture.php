<?php

namespace App\DataFixtures;

use Doctrine\Bundle\MongoDBBundle\Fixture\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Document\Product;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setSku('AA-123456');
        $product->setEan13('1234567890123');
        $product->setProductEans(['1234567890123', '3210987654321']);
        $product->setStock(42);
        $product->setName('Product Test');
        $product->setDescription('Testing a product');
        $manager->persist($product);

        $manager->flush();
    }
}
