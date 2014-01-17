<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Session\Session;

class MainController extends Controller
{
    public function indexAction()
    {        
        //http://symfony.com/doc/current/components/http_foundation/sessions.html
        $session = new Session();
        $session->start();
        //Inicio sessió
        $session->set('name','toni');
        if ($session->get('name'))
        {
            $response = $this->forward('ESDIBInventariBundle:ListItems:show', array(
                'max' => 5,
                'first' => 0,
            ));
            return $response;
        }
        else {
            return $this->render('ESDIBInventariBundle:Default:nosession.html.twig', array('name' => $session->get('name')));
        }
    }
}
?>