<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StorefrontProductController extends Controller
{
    /**
     * @return Response
     */
    public function homepageAction()
    {
        $productRepository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $productRepository->findAll();

        $slideRepository = $this->getDoctrine()->getRepository('AppBundle:Slide');
        $slides = $slideRepository->findAll();

        $newsRepository = $this->getDoctrine()->getRepository('AppBundle:News');
        $news = $newsRepository->findAll();

        return $this->render(':Storefront:HomePage.html.twig', [
            'products' => $products,
            'slides' => $slides,
            'news' => $news,
        ]);
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render(':Storefront/product/list.html.twig', [
            'products' => $products
        ]);
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
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