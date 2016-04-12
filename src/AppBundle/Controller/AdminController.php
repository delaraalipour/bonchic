<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function homepageAction()
    {
        return $this->render(':Admin/admin.html.twig', [
        ]);
    }
}
