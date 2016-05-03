<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Form\Type\NewsType;
use AppBundle\Entity\News;

class AdminNewsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function newAction(Request $request)
    {
        $news = new News();

        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->persistNews($news);
            $this->addFlash('success', 'News Created');

            return $this->redirectToRoute('admin_news_list');
        }

        return $this->render(':Admin/news:new.html.twig', [
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');
        $news = $repository->findAll();

        return $this->render(':Admin/news:list.html.twig', [
           'news' => $news
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');
        $news = $repository->find($id);

        $form = $this->createForm(NewsType::class, $news);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->persistNews($news);
            $em->flush();

            return $this->redirectToRoute('admin_news_list');
        }

        return $this->render(':Admin/news:update.html.twig', [
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');
        $news = $repository->find($id);

        $em = $this->getDoctrine()->getManager();
        $em->remove($news);
        $em->flush();

        return $this->redirectToRoute('admin_news_list');
    }

    /**
     * @param News $news
     */
    public function persistNews(News $news)
    {
        $file = $news->getFile();

        if (null !== $file) {
            $fileName = md5(uniqid()) . '.' . $file->guessExtension();
            $dir = $this->getParameter('kernel.root_dir') . '/../web/uploads';
            $file->move($dir, $fileName);
            $news->setImage($fileName);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($news);
        $em->flush();
    }
}
