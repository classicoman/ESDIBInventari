<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListItemsController extends Controller
{
	/* Funció */
    public function showAction()
    {
		$items = $this->getDoctrine()
		   ->getRepository('ESDIBInventariBundle:Item')
		   ->findAll();
		   
		if (!$items) {
		    throw $this->createNotFoundException(
			    'No hi ha cap item a dins de la taula'
			);
		}
		
		//Pinta la Plantilla amb els Items
		return $this->render('ESDIBInventariBundle:Item:listitems.html.twig', array('items' => $items) );
	}
}

?>