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
     * @ORM\Column(name="seLibelleServDom", type="string", length=50, nullable=true)
     */
    private $selibelleservdom;

    /**
     * @var string
     *
     * @ORM\Column(name="sedCodeBase", type="string", length=2, nullable=true)
     */
    private $sedcodebase;

    /**
     * @var string
     *
     * @ORM\Column(name="sedIdServDem", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sedidservdem;



    /**
     * Set selibelleservdom
     *
     * @param string $selibelleservdom
     *
     * @return TIloServicedemandeur
     */
    public function setSelibelleservdom($selibelleservdom)
    {
        $this->selibelleservdom = $selibelleservdom;

        return $this;
    }

    /**
     * Get selibelleservdom
     *
     * @return string
     */
    public function getSelibelleservdom()
    {
        return $this->selibelleservdom;
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
     * Get sedidservdem
     *
     * @return string
     */
    public function getSedidservdem()
    {
        return $this->sedidservdem;
    }
}
