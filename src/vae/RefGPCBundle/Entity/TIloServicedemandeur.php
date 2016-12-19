<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloServicedemandeur
 *
 * @ORM\Table(name="t_ilo_servicedemandeur")
 * @ORM\Entity
 */
class TIloServicedemandeur
{
    /**
     * @var string
     *
     * @ORM\Column(name="sedIdServDem", type="string", length=15, nullable=false)
     */
    private $sedidservdem;

    /**
     * @var string
     *
     * @ORM\Column(name="sedLibelleServDem", type="string", length=50, nullable=true)
     */
    private $sedlibelleservdem;

    /**
     * @var string
     *
     * @ORM\Column(name="sedCodeBase", type="string", length=2, nullable=false)
     */
    private $sedcodebase;

    /**
     * @var integer
     *
     * @ORM\Column(name="sedId", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sedid;



    /**
     * Set sedidservdem
     *
     * @param string $sedidservdem
     *
     * @return TIloServicedemandeur
     */
    public function setSedidservdem($sedidservdem)
    {
        $this->sedidservdem = $sedidservdem;

        return $this;
    }

    /**
     * Get sedidservdem
     *
     * @return string
     */
    public function getSedidservdem()
    {
        return $this->sedidservdem;
    }

    /**
     * Set sedlibelleservdem
     *
     * @param string $sedlibelleservdem
     *
     * @return TIloServicedemandeur
     */
    public function setSedlibelleservdem($sedlibelleservdem)
    {
        $this->sedlibelleservdem = $sedlibelleservdem;

        return $this;
    }

    /**
     * Get sedlibelleservdem
     *
     * @return string
     */
    public function getSedlibelleservdem()
    {
        return $this->sedlibelleservdem;
    }

    /**
     * Set sedcodebase
     *
     * @param string $sedcodebase
     *
     * @return TIloServicedemandeur
     */
    public function setSedcodebase($sedcodebase)
    {
        $this->sedcodebase = $sedcodebase;

        return $this;
    }

    /**
     * Get sedcodebase
     *
     * @return string
     */
    public function getSedcodebase()
    {
        return $this->sedcodebase;
    }

    /**
     * Get sedid
     *
     * @return integer
     */
    public function getSedid()
    {
        return $this->sedid;
    }
}
