<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction(/*$name*/)
    {
        return $this->render('ESDIBInventariBundle:Default:index.html.twig'/*, array('name' => $name)*/);
    }
}
?>