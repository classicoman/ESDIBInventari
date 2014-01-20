<?php
namespace ESDIB\InventariBundle\Entity;

/*Empram Doctrine per a fer MAPPING emprant ORM*/
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="item")
*/
class Item
{
        /**
        * @ORM\ManyToOne(targetEntity="Estat", inversedBy="items")
        * @ORM\JoinColumn(name="estat_id", referencedColumnName="id")
        */
        protected $estat;
    
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
	* @ORM\Column(type="decimal", scale=2, nullable=true)
	*/	
	protected $preu;
	
	/**
	* @ORM\Column(type="text", nullable=true)
	*/	
	protected $descripcio;

	/**
	* @ORM\Column(type="integer", nullable=true)
	*/	
	protected $unitats;

	/**
	* @ORM\Column(type="date", nullable=true)
	*/	
	protected $dataalta;

	/**
	* @ORM\Column(type="date", nullable=true)
	*/	
	protected $databaixa;
	
	 
// MÈTODES
 
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

    /**
     * Set unitats
     *
     * @param integer $unitats
     * @return Item
     */
    public function setUnitats($unitats)
    {
        $this->unitats = $unitats;
        return $this;
    }

    /**
     * Get unitats
     *
     * @return integer 
     */
    public function getUnitats()
    {
        return $this->unitats;
    }

    /**
     * Set estat
     *
     * @param \ESDIB\InventariBundle\Entity\Estat $estat
     * @return Item
     */
    public function setEstat(\ESDIB\InventariBundle\Entity\Estat $estat = null)
    {
        $this->estat = $estat;
        return $this;
    }

    /**
     * Get estat
     *
     * @return \ESDIB\InventariBundle\Entity\Estat 
     */
    public function getEstat()
    {
        return $this->estat;
    }

    /**
     * Set dataalta
     *
     * @param \DateTime $dataalta
     * @return Item
     */
    public function setDataalta($dataalta)
    {
        $this->dataalta = $dataalta;
        return $this;
    }

    /**
     * Get dataalta
     *
     * @return \DateTime 
     */
    public function getDataalta()
    {
        return $this->dataalta;
    }

    /**
     * Set databaixa
     *
     * @param \DateTime $databaixa
     * @return Item
     */
    public function setDatabaixa($databaixa)
    {
        $this->databaixa = $databaixa;
        return $this;
    }

    /**
     * Get databaixa
     *
     * @return \DateTime 
     */
    public function getDatabaixa()
    {
        return $this->databaixa;
    }
}
