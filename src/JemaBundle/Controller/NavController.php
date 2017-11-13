<?php

namespace JemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $albums = null;
        return $this->render('index.html.twig', [
            'albums' => $albums
        ]);
    }

    public function navAction()
    {
        $menu = "test";
        return $menu;
    }
}
