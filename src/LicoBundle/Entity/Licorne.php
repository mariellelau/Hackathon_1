<?php

namespace LicoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Licorne
 */

class Licorne
{

    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $iDLicorne;

    /**
     * @var string
     */
    private $nomLicorne;

    /**
     * @var string
     */
    private $corneLicorne;

    /**
     * @var string
     */
    private $yeuxLicorne;

    /**
     * @var string
     */
    private $alignementLicorne;

    /**
     * @var string
     */
    private $regimeLicorne;

    /**
     * @var string
     */
    private $pelageLicorne;

    /**
     * @var string
     */
    private $imageLicorne;

    /**
     * @var \LicoBundle\Entity\Environnement
     */
    private $Environnement;


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
     * Set iDLicorne
     *
     * @param integer $iDLicorne
     * @return Licorne
     */
    public function setIDLicorne($iDLicorne)
    {
        $this->iDLicorne = $iDLicorne;

        return $this;
    }

    /**
     * Get iDLicorne
     *
     * @return integer 
     */
    public function getIDLicorne()
    {
        return $this->iDLicorne;
    }

    /**
     * Set nomLicorne
     *
     * @param string $nomLicorne
     * @return Licorne
     */
    public function setNomLicorne($nomLicorne)
    {
        $this->nomLicorne = $nomLicorne;

        return $this;
    }

    /**
     * Get nomLicorne
     *
     * @return string 
     */
    public function getNomLicorne()
    {
        return $this->nomLicorne;
    }

    /**
     * Set corneLicorne
     *
     * @param string $corneLicorne
     * @return Licorne
     */
    public function setCorneLicorne($corneLicorne)
    {
        $this->corneLicorne = $corneLicorne;

        return $this;
    }

    /**
     * Get corneLicorne
     *
     * @return string 
     */
    public function getCorneLicorne()
    {
        return $this->corneLicorne;
    }

    /**
     * Set yeuxLicorne
     *
     * @param string $yeuxLicorne
     * @return Licorne
     */
    public function setYeuxLicorne($yeuxLicorne)
    {
        $this->yeuxLicorne = $yeuxLicorne;

        return $this;
    }

    /**
     * Get yeuxLicorne
     *
     * @return string 
     */
    public function getYeuxLicorne()
    {
        return $this->yeuxLicorne;
    }

    /**
     * Set alignementLicorne
     *
     * @param string $alignementLicorne
     * @return Licorne
     */
    public function setAlignementLicorne($alignementLicorne)
    {
        $this->alignementLicorne = $alignementLicorne;

        return $this;
    }

    /**
     * Get alignementLicorne
     *
     * @return string 
     */
    public function getAlignementLicorne()
    {
        return $this->alignementLicorne;
    }

    /**
     * Set regimeLicorne
     *
     * @param string $regimeLicorne
     * @return Licorne
     */
    public function setRegimeLicorne($regimeLicorne)
    {
        $this->regimeLicorne = $regimeLicorne;

        return $this;
    }

    /**
     * Get regimeLicorne
     *
     * @return string 
     */
    public function getRegimeLicorne()
    {
        return $this->regimeLicorne;
    }

    /**
     * Set pelageLicorne
     *
     * @param string $pelageLicorne
     * @return Licorne
     */
    public function setPelageLicorne($pelageLicorne)
    {
        $this->pelageLicorne = $pelageLicorne;

        return $this;
    }

    /**
     * Get pelageLicorne
     *
     * @return string 
     */
    public function getPelageLicorne()
    {
        return $this->pelageLicorne;
    }

    /**
     * Set imageLicorne
     *
     * @param string $imageLicorne
     * @return Licorne
     */
    public function setImageLicorne($imageLicorne)
    {
        $this->imageLicorne = $imageLicorne;

        return $this;
    }

    /**
     * Get imageLicorne
     *
     * @return string 
     */
    public function getImageLicorne()
    {
        return $this->imageLicorne;
    }

    /**
     * Set Environnement
     *
     * @param \LicoBundle\Entity\Environnement $environnement
     * @return Licorne
     */
    public function setEnvironnement(\LicoBundle\Entity\Environnement $environnement = null)
    {
        $this->Environnement = $environnement;

        return $this;
    }

    /**
     * Get Environnement
     *
     * @return \LicoBundle\Entity\Environnement 
     */
    public function getEnvironnement()
    {
        return $this->Environnement;
    }
}
