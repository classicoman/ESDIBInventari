<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListItemsController extends Controller
{
	/* Funció */
    public function showAction($max_rows)
    {     
                //Montam el Select: només 1 dels elements de l'array resultant
                //activarà un valor del <select>
                $select_rows = array();
                $values = array('5','10','15','20');
                foreach ($values as $v) {
                    $select_rows = ($v == $max_rows) ? "selected='selected'" : "";
                }
                
                
                //Query
		$items = $this->getDoctrine()
		   ->getRepository('ESDIBInventariBundle:Item')
		   ->findAll();
		if (!$items) {
		    throw $this->createNotFoundException(
			    'No hi ha cap item a dins de la taula'
			);
		}
		
		//Redner Template
		return $this->render('ESDIBInventariBundle:Items:items.html.twig', 
			array('files' => $items,
			'max_rows' => 5, 
			'rotuls' => array('id','nom','preu'),
                        'select_rows' => $select_rows
		));
	}
}

?>