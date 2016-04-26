<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;

class CartController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function addAction(Request $request)
    {
        $session = $this->get('session');

        $cart = $session->get('cart');
        $cart[] = $request->get('id');

        $session->set('cart', $cart);

        return $this->redirectToRoute('cart_list');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function deleteAction(Request $request)
    {
        $session = $this->get('session');

        $cart = $session->get('cart');
        $cart[] = $request->get('id');


        return $this->redirectToRoute('cart_list');
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function listAction(Request $request)
    {
        $cart = $this->get('session')->get('cart');

        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');

        $products = [];
        $total = 0;

        if ($cart != null) {
            foreach ($cart as $id) {
                $products[] = $repository->find($id);
                $product = $repository->find($id);
                $total = $total + $product->getPrice();
            }
        }

        return $this->render(':Cart:list.html.twig', [
            'products' => $products,
            'total' => $total,
        ]);
    }
}