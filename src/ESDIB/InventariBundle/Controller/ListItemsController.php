<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ListItemsController extends Controller
{
	/* Funció */
    public function showAction($max,$first)
    {     
                //Montam el Select: només 1 dels elements de l'array resultant
                //activarà un valor del <select>
                $select_rows = array();
                $values = array('5','10','15','20');
                $i=0;
                foreach ($values as $v) {
                    $select_rows[$i++] = ($v == $max) ? "selected=selected" : "";
                }
                
                
                //Query
		$rows = $this->getDoctrine()
		   ->getRepository('ESDIBInventariBundle:Item')
		   ->findAll();
		if (!$rows) {
		    throw $this->createNotFoundException(
			    'No hi ha cap item a dins de la taula'
			);
		}
                
                //Filtra els items a mostrar depenent de $max i $first
                $items = array();
                $i=$n=0;
                foreach($rows as $row) {
                    //Add Row if it is between the margins expressed by $first and $max
                    if ( ($i>=$first) && ($i<$first+$max) )
                        $items[$n] = $rows[$n++];
                    $i++;
                }
		
		//Redner Template
		return $this->render('ESDIBInventariBundle:Items:items.html.twig', 
			array('files' => $items,
                        //Màxim de files a mostrar
			'max' => $max, 
                        //Ròtuls de la taula
			'rotuls' => array('id','nom','preu'),
                        //Nombre de files a mostrar, en CSS
                        'select_rows' => $select_rows,
                        //Número total d'items que hi ha a la taula
                        'num_of_items' => sizeof($rows),
                        'first' => $first
		));
	}
}

?>