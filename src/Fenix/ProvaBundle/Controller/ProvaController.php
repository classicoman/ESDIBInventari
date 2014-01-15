<?php

// src/Fenix/ProvaBundle/Controller/ProvaController.php
namespace Fenix\ProvaBundle\Controller;

//Ja no necessito aixo
//use Symfony\Component\HttpFoundation\Response;

//afegim 'extends Controller' per a poder utilitzar la funció  render()
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProvaController extends Controller
{
    public function indexAction($name)
    {
		return $this->render(
			'FenixProvaBundle:Prova:index.html.twig',
			array('name' => $name)
		);
		// render a PHP template instead
		// return $this->render(
		// 	  'AcmeHelloBundle:Hello:index.html.php',
		// 	  array('name' => $name)
		// );
		
		//Render the HTML directly xtoni
        //return new Response('<html><body>Bon dia '.$name.'!</body></html>');
    }
}

?>