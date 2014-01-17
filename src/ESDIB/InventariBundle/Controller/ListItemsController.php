<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

require_once '_basic.php';

class ListItemsController extends Controller
{
    public function showAction($max=5,$first=0)
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
        //Mostra les files que necessitam
        $items = getItems($this, $rows, $max, $first);

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