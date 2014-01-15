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
	* @ORM\Column(type="integer")
	*/	
	protected $unitats;

	/**
	* @ORM\Column(type="date")
	*/	
	protected $data_alta;

	/**
	* @ORM\Column(type="date")
	*/	
	protected $data_baixa;


	
	 
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
     * Set data_alta
     *
     * @param \DateTime $dataAlta
     * @return Item
     */
    public function setDataAlta($dataAlta)
    {
        $this->data_alta = $dataAlta;

        return $this;
    }

    /**
     * Get data_alta
     *
     * @return \DateTime 
     */
    public function getDataAlta()
    {
        return $this->data_alta;
    }

    /**
     * Set data_baixa
     *
     * @param \DateTime $dataBaixa
     * @return Item
     */
    public function setDataBaixa($dataBaixa)
    {
        $this->data_baixa = $dataBaixa;

        return $this;
    }

    /**
     * Get data_baixa
     *
     * @return \DateTime 
     */
    public function getDataBaixa()
    {
        return $this->data_baixa;
    }
}
