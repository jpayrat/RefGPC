<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloDomaineactivite
 *
 * @ORM\Table(name="t_ilo_domaineactivite")
 * @ORM\Entity
 */
class TIloDomaineactivite
{
    /**
     * @var string
     *
     * @ORM\Column(name="daIdDomAct", type="string", length=25, nullable=false)
     */
    private $daiddomact;

    /**
     * @var string
     *
     * @ORM\Column(name="daLibelleDomAct", type="string", length=50, nullable=true)
     */
    private $dalibelledomact;

    /**
     * @var string
     *
     * @ORM\Column(name="daDetailDomAct", type="string", length=25, nullable=true)
     */
    private $dadetaildomact;

    /**
     * @var string
     *
     * @ORM\Column(name="daCodeBase", type="string", length=2, nullable=false)
     */
    private $dacodebase;

    /**
     * @var integer
     *
     * @ORM\Column(name="daId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $daid;

    
    
//***************************
public function getFormLibelleDomActETId()
{
    
    return ($this->daiddomact.' ('.$this->dalibelledomact.')');
    
}

    /**
     * Set daiddomact
     *
     * @param string $daiddomact
     *
     * @return TIloDomaineactivite
     */
    public function setDaiddomact($daiddomact)
    {
        $this->daiddomact = $daiddomact;

        return $this;
    }

    /**
     * Get daiddomact
     *
     * @return string
     */
    public function getDaiddomact()
    {
        return $this->daiddomact;
    }

    /**
     * Set dalibelledomact
     *
     * @param string $dalibelledomact
     *
     * @return TIloDomaineactivite
     */
    public function setDalibelledomact($dalibelledomact)
    {
        $this->dalibelledomact = $dalibelledomact;

        return $this;
    }

    /**
     * Get dalibelledomact
     *
     * @return string
     */
    public function getDalibelledomact()
    {
        return $this->dalibelledomact;
    }

    /**
     * Set dadetaildomact
     *
     * @param string $dadetaildomact
     *
     * @return TIloDomaineactivite
     */
    public function setDadetaildomact($dadetaildomact)
    {
        $this->dadetaildomact = $dadetaildomact;

        return $this;
    }

    /**
     * Get dadetaildomact
     *
     * @return string
     */
    public function getDadetaildomact()
    {
        return $this->dadetaildomact;
    }

    /**
     * Set dacodebase
     *
     * @param string $dacodebase
     *
     * @return TIloDomaineactivite
     */
    public function setDacodebase($dacodebase)
    {
        $this->dacodebase = $dacodebase;

        return $this;
    }

    /**
     * Get dacodebase
     *
     * @return string
     */
    public function getDacodebase()
    {
        return $this->dacodebase;
    }

    /**
     * Get daid
     *
     * @return integer
     */
    public function getDaid()
    {
        return $this->daid;
    }
}
