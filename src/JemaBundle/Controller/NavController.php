<?php

namespace JemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Finder\Finder;


class NavController extends Controller
{
    public function _navAction($idActive)
    {
        $nav = Yaml::parse(file_get_contents('../src/JemaBundle/Resources/config/nav.yml'));
        return $this->render('nav.html.twig', [
            'nav' => $nav
            ,'idActive' => $idActive
        ]);
    }
}
