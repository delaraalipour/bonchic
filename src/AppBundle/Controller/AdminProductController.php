<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\ProductType;
use AppBundle\Entity\Product;

class AdminProductController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function newAction(Request $request)
    {
        $product = new Product();

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persistProduct($product);
            $this->addFlash('success', 'Product Created');

            return $this->redirectToRoute('admin_product_list');
        }

        return $this->render(':Admin/product/new.html.twig', [
            'form' => $form->createView()
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

        return $this->render(':Admin/product/list.html.twig', [
            'products' => $products
        ]);
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function updateAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->persistProduct($product);
            $em->flush();

            return $this->redirectToRoute('admin_product_list');
        }

        return $this->render(':Admin/product/update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     *
     * @return Response
     */
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        $this->addFlash('success', 'Product Deleted');

        return $this->redirectToRoute('admin_product_list');
    }

    /**
     * @param Product $product
     */
    protected function persistProduct(Product $product)
    {
        $file = $product->getFile();

        if (null !== $file) {
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $dir = $this->getParameter('kernel.root_dir') . '/../web/uploads';
            $file->move($dir, $fileName);
            $product->setImage($fileName);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();
    }
}