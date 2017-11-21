<?php

namespace JemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NewsletterController extends Controller
{
    /**
     * @Route("/addnews/")
     */
    public function addNewsAction()
    {

        return $this->render('JemaBundle:Default:index.html.twig');
    }


}
