<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TIloBandeau
 *
 * @ORM\Table(name="t_ilo_bandeau")
 * @ORM\Entity
 */
class TIloBandeau
{
    /**
     * @var string
     *
     * @ORM\Column(name="banLibelleBandeau", type="string", length=25, nullable=true)
     */
    private $banlibellebandeau;

    /**
     * @var string
     *
     * @ORM\Column(name="banIdnBandeau", type="string", length=3)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $banidnbandeau;



    /**
     * Set banlibellebandeau
     *
     * @param string $banlibellebandeau
     *
     * @return TIloBandeau
     */
    public function setBanlibellebandeau($banlibellebandeau)
    {
        $this->banlibellebandeau = $banlibellebandeau;

        return $this;
    }

    /**
     * Get banlibellebandeau
     *
     * @return string
     */
    public function getBanlibellebandeau()
    {
        return $this->banlibellebandeau;
    }

    /**
     * Get banidnbandeau
     *
     * @return string
     */
    public function getBanidnbandeau()
    {
        return $this->banidnbandeau;
    }
}
