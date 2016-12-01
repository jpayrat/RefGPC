<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TSiteParentzone
 *
 * @ORM\Table(name="t_site_parentzone")
 * @ORM\Entity
 */
class TSiteParentzone
{
    /**
     * @var string
     *
     * @ORM\Column(name="siIdSite_t_sites", type="string", length=10, nullable=true)
     */
    private $siidsiteTSites;

    /**
     * @var string
     *
     * @ORM\Column(name="siIdSite", type="string", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $siidsite;



    /**
     * Set siidsiteTSites
     *
     * @param string $siidsiteTSites
     *
     * @return TSiteParentzone
     */
    public function setSiidsiteTSites($siidsiteTSites)
    {
        $this->siidsiteTSites = $siidsiteTSites;

        return $this;
    }

    /**
     * Get siidsiteTSites
     *
     * @return string
     */
    public function getSiidsiteTSites()
    {
        return $this->siidsiteTSites;
    }

    /**
     * Get siidsite
     *
     * @return string
     */
    public function getSiidsite()
    {
        return $this->siidsite;
    }
}
