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
        $rep = $this->getDoctrine()->getManager()->getRepository('JemaBundle:Provider');
        $providers = $rep->findAll();
        // $stages = $providers[0]->getStages();
        return $this->render('public\index.html.twig', [
            'providers' => $providers
        ]);
    }

    /**
     * @Route("/removeprovider/{id}", name="removeprovider", defaults={"id": "0"})
     */
    public function removeProviderAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $provider = $em->getRepository('JemaBundle:Provider')->find($id);

        if ($provider == null){
            $msg = "Aucun provider n'existe avec cet id : ".$id;
        }
        else {
            $em->remove($provider);
            $em->flush();
            $msg = "Provider d'id " . $id . " supprimé. Ainsi que toute ses relations (automatique).";
        }

        return $this->render('public\test.html.twig', [
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
