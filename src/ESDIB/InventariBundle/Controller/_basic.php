<?php

/* 
 *    De la col·lecció de registres $rows, selecciona i retorna aquells que 
 *  determinen els valors $max i $fieldirst
 */
function getItems($object, $rows, $max, $fieldirst)
{
        if (!$rows) {
            throw $object->createNotFoundException(
                    'No hi ha cap item a dins de la taula'
                );
        }
        //Filtra els items a mostrar depenent de $max i $fieldirst
        $selection = array();
        $i=$n=0;
        foreach($rows as $row) {
            //Add Row if it is between the margins expressed by $fieldirst and $max
            if ( ($i>=$fieldirst) && ($i<$fieldirst+$max) )
                $selection[$n] = $rows[$n++];
            $i++;
        }
        //Retorna les files seleccionades
        return $selection;
}