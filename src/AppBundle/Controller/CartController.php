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
     *
     * @return Response
     */
    public function addAction(Request $request)
    {
        $session = $this->get('session');
        $cart = $session->get('cart');

        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $newQuantity = intval($request->get('q'));

        if ($newQuantity <= 0) {
            $newQuantity = 1;
        }
        $product = $repository->find($id);

        if ($product == null) {
            $this->addFlash('success', 'not Exist.');
            return $this->redirectToRoute('cart_list');
        }

        $cart[$id] = $newQuantity;

        $session->set('cart', $cart);

        return $this->redirectToRoute('cart_list');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function deleteAction(Request $request)
    {
        $session = $this->get('session');
        $cart = $session->get('cart');
        $id = $request->get('id');

        unset($cart[$id]);
        $session->set('cart', $cart);

        return $this->redirectToRoute('cart_list');
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function listAction(Request $request)
    {
        $cart = $this->get('session')->get('cart');

        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');

        $products = [];
        $total = 0;

        if ($cart != null) {
            foreach ($cart as $id => $quantity) {
                $product = $repository->find($id);
                $products[] = $product;
                $total += ($product->getPrice() * $quantity);
            }
        }

        return $this->render(':Cart:list.html.twig', [
            'products' => $products,
            'total' => $total,
            'cart' => $cart,
        ]);
    }
}