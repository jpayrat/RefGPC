<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TProdsav
 *
 * @ORM\Table(name="t_prodsav")
 * @ORM\Entity
 */
class TProdsav
{
    /**
     * @var string
     *
     * @ORM\Column(name="prsLibelleProdSav", type="string", length=50, nullable=true)
     */
    private $prslibelleprodsav;

    /**
     * @var string
     *
     * @ORM\Column(name="prsIdProdSav", type="string", length=15)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prsidprodsav;



    /**
     * Set prslibelleprodsav
     *
     * @param string $prslibelleprodsav
     *
     * @return TProdsav
     */
    public function setPrslibelleprodsav($prslibelleprodsav)
    {
        $this->prslibelleprodsav = $prslibelleprodsav;

        return $this;
    }

    /**
     * Get prslibelleprodsav
     *
     * @return string
     */
    public function getPrslibelleprodsav()
    {
        return $this->prslibelleprodsav;
    }

    /**
     * Get prsidprodsav
     *
     * @return string
     */
    public function getPrsidprodsav()
    {
        return $this->prsidprodsav;
    }
}
