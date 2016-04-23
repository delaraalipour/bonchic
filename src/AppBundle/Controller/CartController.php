<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Session\Session;

class CartController extends Controller
{
    public function addAction(Request $request)
    {
        $session = $this->get('session');

        $cart = $session->get('cart');
        $cart[] = $request->get('id');

        $session->set('cart', $cart);

        return $this->redirectToRoute('storefront_product_list');
    }

    public function listAction(Request $request)
    {
        $cart = $this->get('session')->get('cart');

        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');

        $products = [];

        if ($cart != null) {
            foreach ($cart as $id) {
                $products[] = $repository->find($id);
            }
        }

        return $this->render(':Cart:list.html.twig', [
            'products' => $products
        ]);
    }
}