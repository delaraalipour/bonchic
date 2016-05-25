<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\SlideType;
use AppBundle\Entity\Slide;

class AdminSlideController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function newAction(Request $request)
    {
        $slide = new Slide();

        $form = $this->createForm(SlideType::class, $slide);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $this->persistSlide($slide);
            $this->addFlash('success', '.Slide Created');

            return $this->redirectToRoute('admin_slide_list');
        }

        return $this->render(':Admin/slide:new.html.twig', [
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:Slide');
        $slides = $repository->findAll();

        return $this->render(':Admin/slide:list.html.twig', [
            'slides' => $slides
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:Slide');
        $slide = $repository->find($id);

        $form = $this->createForm(SlideType::class, $slide);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->persistSlide($slide);
            $em->flush();
            $this->addFlash('success', '.Slide Saved');

            return $this->redirectToRoute('admin_slide_list');
        }

        return $this->render(':Admin/slide:update.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @param Request $request
     */
    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $repository = $this->getDoctrine()->getRepository('AppBundle:Slide');
        $slide = $repository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($slide);
        $em->flush();
        $this->addFlash('success', '.Slide Deleted');

        return $this->redirectToRoute('admin_slide_list');
    }

    /**
     * @param Slide $slide
     */
    public function persistSlide(Slide $slide)
    {
        $file = $slide->getFile();

        if (null !== $file) {
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $dir = $this->getParameter('kernel.root_dir') . '/../web/uploads';
            $file->move($dir, $fileName);
            $slide->setImage($fileName);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($slide);
        $em->flush();
    }
}