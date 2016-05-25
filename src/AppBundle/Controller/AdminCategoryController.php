<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Form\Type\CategoryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminCategoryController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function newAction(Request $request)
    {
        $category = new category();

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persistCategory($category);
            $this->addFlash('success', '.Category Created');

            return $this->redirectToRoute('admin_category_list');
        }
        return $this->render(':Admin/category/new.html.twig', [
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        $categories = $repository->findAll();

        return $this->render('Admin/category/list.html.twig', [
            'categories' => $categories
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        $category = $repository->find($id);

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persistCategory($category);
            $this->addFlash('success', '.category Saved');

            return $this->redirectToRoute('admin_category_list');
        }

        return $this->render(':Admin/category/update.html.twig', [
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:Category');
        $product = $repository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();

        $this->addFlash('success', '.Category Deleted');

        return $this->redirectToRoute('admin_category_list');
    }

    /**
     * @param Category $category
     */
    protected function persistCategory(Category $category)
    {
        $file = $category->getFile();

        if (null !== $file) {
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $dir = $this->getParameter('kernel.root_dir') . '/../web/uploads';
            $file->move($dir, $fileName);
            $category->setImage($fileName);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
    }
}