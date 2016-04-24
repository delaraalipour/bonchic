<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StorefrontProductController extends Controller
{
    public function HomePageAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render(':Storefront:HomePage.html.twig', [
            'products' => $products
        ]);

    }

    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render(':Storefront/product/list.html.twig', [
            'products' => $products
        ]);
    }

    public function showAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        return $this->render(':Storefront/product/show.html.twig', [
            'product' => $product
        ]);
    }
}