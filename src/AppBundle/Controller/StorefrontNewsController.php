<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class StorefrontNewsController extends Controller
{
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
