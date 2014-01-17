<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ESDIB\InventariBundle\Controller\ListItemsController;

class MainController extends Controller
{
    public function indexAction(/*$name*/)
    {
        $main = new ListItemsController();
        $main->showAction(10,0);
        //return $this->render('ESDIBInventariBundle:Default:index.html.twig'/*, array('name' => $name)*/);
    }
}
?>