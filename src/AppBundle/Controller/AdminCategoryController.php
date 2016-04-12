<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\Type\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminCategoryController extends Controller
{
    public function newAction(Request $request)
    {
        $Category = new category();

        $form = $this->createForm(CategoryType::class, $Category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Category);
            $em->flush();

            return $this->redirectToRoute('admin_category_list');
        }
        return $this->render(':Admin/category/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        $categories = $repository->findAll();

        return $this->render('Admin/category/list.html.twig', [
            'categories' => $categories
        ]);
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        $product = $repository->find($id);

        $form = $this->createForm(CategoryType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();

            return $this->redirectToRoute('admin_category_list');
        }
        return $this->render(':Admin/category/delete.html.twig', [
            'form' => $form->createView()
        ]);
    }
}