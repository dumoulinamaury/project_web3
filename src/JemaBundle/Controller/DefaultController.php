<?php

namespace JemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use JemaBundle\Entity\ServiceCat;

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
     * @Route("/removeacategory/{id}", name="page2")
     */
    public function removeacategoryAction()
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(ServiceCat::class);
        $services = $repo->findAll();

        $msg = "ServiceCat d'id"; // $services[0]['id']"

        $providers = null;
        return $this->render('test.html.twig', [
            'providers' => $providers,
            'message' => $msg
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
