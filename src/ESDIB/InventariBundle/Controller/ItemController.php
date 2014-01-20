<?php

namespace ESDIB\InventariBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

require_once '_basic.php';

use ESDIB\InventariBundle\Entity\Item;
use ESDIB\InventariBundle\Entity\Estat;
//Handling form submission
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    public function showAction(Request $request, $id=0)
    {
        // ? És una edició
        if ($id) {
            $item = $this->getDoctrine()
               ->getRepository('ESDIBInventariBundle:Item')
               ->find($id);
            if (!$item) {
                throw $this->createNotFoundException(
                        'No he trobat l\'item amb identificador = '.$id
                    );
            }
        }
        else {  // : És una alta
            $item = new Item();
            $item->setNom('');
        }

        //Recupera Estats
        $estats = $this->getDoctrine()
           ->getRepository('ESDIBInventariBundle:Estat')
           ->findAll();

        //Pinta la Plantilla amb Formulari fet 'a ma'
/*	return $this->render('ESDIBInventariBundle:Item:item.html.twig', 
                array('item' => $item, 'field' => 'estat_id', 'tabulacio' => $estats,
        )); */

        // Prepara estats a mostrar en ListBox
        $i=0;
        $choices_estat = array();
        foreach ($estats as $e) {
            http://symfony.com/doc/current/reference/forms/types/choice.html#choices
            $choices_estat[ $e->getId() ] = $e->getNom();
        }

        //Crea l'Objecte  form
        $form = $this->createFormBuilder($item)
        ->add('nom', 'text')
        ->add('preu', 'number')
        ->add('descripcio', 'textarea')
        ->add('dataalta', 'date')
        ->add('databaixa', 'date')
        //Es deixa a Symfony la tasca de detectar el tipus de input que hi convé: 
        //http://stackoverflow.com/questions/19710595/symfony-how-to-save-foreign-key-in-form-many-to-one
        ->add('estat', null)
        ->add('Guardar', 'submit')
        ->getForm();

        //Handle the Submit
        $form->handleRequest($request);
        if ($form->isValid())
        {
            // Saving the task to the database
            $em = $this->getDoctrine()->getManager();
            $em->persist($item); //pàgina 167
            $em->flush();

            // Una vegada feta l'alta, torna a llistat d'items
           return $this->redirect($this->generateUrl('show_items', array(
                'max' => 20, //xtoni On puc guardar aquests paràmetres?
                'first' => 0,
            )));
        /*  $response = $this->forward('ESDIBInventariBundle:ListItems:show', array(
                'max' => 20, 'first' => 0,
            ));
            return $response;*/
        }

        //Render the Template with the Form
        return $this->render('ESDIBInventariBundle:Item:item.html.twig', array(
                'form' => $form->createView(),
        ));
    }
    
    /*
     * Delete an Item from the Inventory
     */
    public function deleteAction($id) {
        //Recupera Item
        $item = $this->getDoctrine()
           ->getRepository('ESDIBInventariBundle:Item')
           ->find($id);
        
        // Deleting the item
        $em = $this->getDoctrine()->getManager();
        $em->remove($item); //pàgina 167
        $em->flush();

        // Torna a llistat d'items
       return $this->redirect($this->generateUrl('show_items', array(
            'max' => 20, //xtoni On puc guardar aquests paràmetres?
            'first' => 0,
        )));
    }
}
?>