<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class StorefrontNewsController extends Controller
{
    /**
     * @param Request $request
     *
     * @return Response
     */
    public function listAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');
        $news = $repository->findAll();

        return $this->render(':Storefront/news:list.html.twig', [
            'news' => $news
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
        $repository = $this->getDoctrine()->getRepository('AppBundle:News');
        $news = $repository->find($id);

        return $this->render(':Storefront/news:show.html.twig', [
            'news' => $news
        ]);
    }
}
