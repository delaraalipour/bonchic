<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\Type\ProductType;
use AppBundle\Entity\Product;

class AdminProductController extends Controller
{
    public function newAction(Request $request)
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $file = $product->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $Dir = $this->getParameter('kernel.root_dir').'/../web/uploads';
            $file->move($Dir, $fileName);
            $product->setImage($fileName);

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('admin_product_list');
        }

        return $this->render(':Admin/product/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render(':Admin/product/list.html.twig', [
            'products' => $products
        ]);
    }

    public function updateAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $product->upload();
            $em->persist($product);
            $em->flush();

            $this->addFlash('success', '.product saved');

            return $this->redirectToRoute('admin_product_list');
        }

        return $this->render(':Admin/product/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $product->upload();
            $em->remove($product);
            $em->flush();

            return $this->redirectToRoute('admin_product_list');
        }
        return $this->render(':Admin/product/delete.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
