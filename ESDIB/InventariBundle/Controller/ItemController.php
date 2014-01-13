<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ItemController extends Controller
{
	/* Funció */
    public function showAction($id)
    {
		$item = $this->getDoctrine()
		   ->getRepository('ESDIBInventariBundle:Item')
		   ->find($id);
		   
		if (!$item) {
		    throw $this->createNotFoundExcepction(
			    'No he trobat l\'item '.$id
			);
		}
		
		//Pinta la Plantilla
		return $this->render('ESDIBInventariBundle:Item:item.html.twig', array('item' => $item));

	}
}
?>