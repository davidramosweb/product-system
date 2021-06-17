<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Document\Product;
use App\Document\ProductAttribute;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class ProductController extends AbstractController
{
    /**
     * @Route("/products", name="app_products")
     */
    public function productsAction(DocumentManager $dm, SerializerInterface $serializer)
    {
        $products = $dm->getRepository(Product::class)->findAll();
        return new Response(
            $serializer->serialize($products, 'json'),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }

    /**
     * @Route("/product/{ObjectId}", name="app_product")
     */
    public function productAction(string $ObjectId, DocumentManager $dm, SerializerInterface $serializer)
    {
        $product = $dm->getRepository(Product::class)->find($ObjectId);
        return new Response(
            $serializer->serialize($product, 'json'),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }

    /**
     * @Route("/product/ean13/{ean13}", name="app_product_ean13")
     */
    public function productEan13Action(int $ean13, DocumentManager $dm, SerializerInterface $serializer)
    {
        $product = $dm->getRepository(Product::class)->findOneBy(['ean13' => $ean13]);
        return new Response(
            $serializer->serialize($product, 'json'),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }
}
