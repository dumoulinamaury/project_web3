<?php

namespace JemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $providers = null;
        return $this->render('index.html.twig', [
            'providers' => $providers
        ]);
    }

    /**
     * @Route("/page2/", name="page2")
     */
    public function page2Action()
    {
        $providers = null;
        return $this->render('index.html.twig', [
            'providers' => $providers
        ]);
    }
    /**
     * @Route("/page3/", name="page3")
     */
    public function page3Action()
    {
        $providers = null;
        return $this->render('index.html.twig', [
            'providers' => $providers
        ]);
    }

    /**
     * @Route("/page4/", name="page4")
     */
    public function page4Action()
    {
        $providers = null;
        return $this->render('index.html.twig', [
            'providers' => $providers
        ]);
    }

}
