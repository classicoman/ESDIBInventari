<?php
namespace ESDIB\InventariBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="proveidors")
*/
class Proveidor
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
	* @ORM\Column(type="string", length=150)
	*/
	protected $adreca;
	
	/**
	* @ORM\Column(type="string", length=12)
	*/
	protected $telf1;
	
	/**
	* @ORM\Column(type="string", length=12)
	*/
	protected $telf2;
	
	/**
	* @ORM\Column(type="string", length=12)
	*/
	protected $fax;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $web;
	
	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $email;
	
	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $contacte;
	


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
     * @return Proveidor
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
     * Set adreca
     *
     * @param string $adreca
     * @return Proveidor
     */
    public function setAdreca($adreca)
    {
        $this->adreca = $adreca;

        return $this;
    }

    /**
     * Get adreca
     *
     * @return string 
     */
    public function getAdreca()
    {
        return $this->adreca;
    }

    /**
     * Set telf1
     *
     * @param string $telf1
     * @return Proveidor
     */
    public function setTelf1($telf1)
    {
        $this->telf1 = $telf1;

        return $this;
    }

    /**
     * Get telf1
     *
     * @return string 
     */
    public function getTelf1()
    {
        return $this->telf1;
    }

    /**
     * Set telf2
     *
     * @param string $telf2
     * @return Proveidor
     */
    public function setTelf2($telf2)
    {
        $this->telf2 = $telf2;

        return $this;
    }

    /**
     * Get telf2
     *
     * @return string 
     */
    public function getTelf2()
    {
        return $this->telf2;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Proveidor
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set web
     *
     * @param string $web
     * @return Proveidor
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Proveidor
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set contacte
     *
     * @param string $contacte
     * @return Proveidor
     */
    public function setContacte($contacte)
    {
        $this->contacte = $contacte;

        return $this;
    }

    /**
     * Get contacte
     *
     * @return string 
     */
    public function getContacte()
    {
        return $this->contacte;
    }
}
