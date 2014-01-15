<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ESDIBInventariBundle:Items:items.html.twig');
    }
}
?>