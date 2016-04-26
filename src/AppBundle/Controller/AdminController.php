<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    /**
     * @return Response
     */
    public function indexAction()
    {
        return $this->render(':Admin/index.html.twig');
    }
}
