<?php
namespace ESDIB\InventariBundle\Entity;

/*Empram Doctrine per a fer MAPPING emprant ORM*/
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="items")
*/
class Item
{
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $nom;
	
	/**
	* @ORM\Column(type="decimal", scale=2)
	*/	
	protected $preu;
	
	/**
	* @ORM\Column(type="text")
	*/	
	protected $descripcio;

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
     * @return Item
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
     * Set preu
     *
     * @param string $preu
     * @return Item
     */
    public function setPreu($preu)
    {
        $this->preu = $preu;

        return $this;
    }

    /**
     * Get preu
     *
     * @return string 
     */
    public function getPreu()
    {
        return $this->preu;
    }

    /**
     * Set descripcio
     *
     * @param string $descripcio
     * @return Item
     */
    public function setDescripcio($descripcio)
    {
        $this->descripcio = $descripcio;

        return $this;
    }

    /**
     * Get descripcio
     *
     * @return string 
     */
    public function getDescripcio()
    {
        return $this->descripcio;
    }
}
