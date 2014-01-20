<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

require_once '_basic.php';

/*
 * Classe: AJAX. Incorpora tots els controladors de Ajax emprats a l'aplicació.
 */
class AjaxController extends Controller
{

    /*
     * Llista tots els items
     */
    public function listItemsXAction($max,$first)
    {
        //Query
        $rows = $this->getDoctrine()
           ->getRepository('ESDIBInventariBundle:Item')
           ->findAll();
        //Mostra les files que necessitam
        $items = getItems($this, $rows, $max, $first);
        
        return $this->render('ESDIBInventariBundle:Items:itemsX.html.twig', 
			array('max' => $max,
                        //Màxim de files a mostrar
			'first' => $first,
                        'rotuls' => array('id','nom','preu'),                            
                        'files' => $items ));
    }
}
?>