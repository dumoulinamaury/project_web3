<?php

namespace JemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class NavController extends Controller
{
    public function _navAction()
    {
        $nav[] = ["name" => "index", "access" => "public", "pages" => [
                        ["name" => "index", "access" => "public", "route" => "index"],
                        ["name" => "page2", "access" => "public", "route" => "index"]
                    ]];
        return $this->render('nav.html.twig', [
            'nav' => $nav
        ]);
    }
}
