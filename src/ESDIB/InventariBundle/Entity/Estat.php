<?php

namespace ESDIB\InventariBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estat
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Estat
{
    /**
    * @ORM\OneToMany(targetEntity="Item", mappedBy="estat")
    */
    protected $items;
    public function __construct()
    {
        $this->items = new ArrayCollection();
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Estat
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Add items
     *
     * @param \ESDIB\InventariBundle\Entity\Item $items
     * @return Estat
     */
    public function addItem(\ESDIB\InventariBundle\Entity\Item $items)
    {
        $this->items[] = $items;

        return $this;
    }

    /**
     * Remove items
     *
     * @param \ESDIB\InventariBundle\Entity\Item $items
     */
    public function removeItem(\ESDIB\InventariBundle\Entity\Item $items)
    {
        $this->items->removeElement($items);
    }

    /**
     * Get items
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /* xtoni
     * Aquesta funció s'ha d'afegir perquè quan l'usuari selecciona un valor del
     * LISTBOX de Estats, retorni un valor string en lloc d'un objecte.
     */
    public function __toString() {
        return $this->getNom();
    }
}
