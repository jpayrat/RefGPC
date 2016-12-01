<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloEntreprise
 *
 * @ORM\Table(name="t_ilo_entreprise")
 * @ORM\Entity
 */
class TIloEntreprise
{
    /**
     * @var string
     *
     * @ORM\Column(name="enLibelleEntreprise", type="string", length=50, nullable=true)
     */
    private $enlibelleentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="enZoneETREntreprise", type="string", length=2, nullable=true)
     */
    private $enzoneetrentreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="enCodeBase", type="string", length=2, nullable=true)
     */
    private $encodebase;

    /**
     * @var string
     *
     * @ORM\Column(name="enIdEntreprise", type="string", length=20)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $enidentreprise;



    /**
     * Set enlibelleentreprise
     *
     * @param string $enlibelleentreprise
     *
     * @return TIloEntreprise
     */
    public function setEnlibelleentreprise($enlibelleentreprise)
    {
        $this->enlibelleentreprise = $enlibelleentreprise;

        return $this;
    }

    /**
     * Get enlibelleentreprise
     *
     * @return string
     */
    public function getEnlibelleentreprise()
    {
        return $this->enlibelleentreprise;
    }

    /**
     * Set enzoneetrentreprise
     *
     * @param string $enzoneetrentreprise
     *
     * @return TIloEntreprise
     */
    public function setEnzoneetrentreprise($enzoneetrentreprise)
    {
        $this->enzoneetrentreprise = $enzoneetrentreprise;

        return $this;
    }

    /**
     * Get enzoneetrentreprise
     *
     * @return string
     */
    public function getEnzoneetrentreprise()
    {
        return $this->enzoneetrentreprise;
    }

    /**
     * Set encodebase
     *
     * @param string $encodebase
     *
     * @return TIloEntreprise
     */
    public function setEncodebase($encodebase)
    {
        $this->encodebase = $encodebase;

        return $this;
    }

    /**
     * Get encodebase
     *
     * @return string
     */
    public function getEncodebase()
    {
        return $this->encodebase;
    }

    /**
     * Get enidentreprise
     *
     * @return string
     */
    public function getEnidentreprise()
    {
        return $this->enidentreprise;
    }
}
