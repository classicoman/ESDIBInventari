<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getItems($object, $rows, $max, $first) {
        if (!$rows) {
            throw $object->createNotFoundException(
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

        return $items;
}