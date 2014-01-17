<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

require_once '_basic.php';

/* http://stackoverflow.com/questions/13584591/how-to-integrate-ajax-with-symfony2 */
class AjaxController extends Controller
{
    // max   maxim number of rows to show, qhe ha estat canviat per l'usuari
    // first de quina fila començam a llistar
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
                        'files' => $items ));
    }
}
?>