<?php
namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session\Session;

class MainController extends Controller
{
    public function indexAction()
    {        
        //Mostra llistat de Items.
        $response = $this->forward('ESDIBInventariBundle:ListItems:show', array(
            'max' => 5,
            'first' => 0,
        ));
        return $response;
    }
}
?>