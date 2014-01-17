<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Response;

/* http://stackoverflow.com/questions/13584591/how-to-integrate-ajax-with-symfony2 */
class AjaxController extends Controller
{
    // max   maxim number of rows to show, qhe ha estat canviat per l'usuari
    // first de quina fila començam a llistar
    public function listItemsXAction($max,$first)
    {     
        $response = "max=$max i first=$first";
        
        //return new Response($response, Response::HTTP_OK);
        
        return $this->render('ESDIBInventariBundle:Items:itemsX.html.twig', 
			array('max' => $max,
                        //Màxim de files a mostrar
			'first' => $first));
    }
}
?>