<?php

namespace vae\RefGPCBundle\Entity;

/**
 * TProdsav
 */
class TProdsav
{
    /**
     * @var string
     */
    private $prslibelleprodsav;

    /**
     * @var string
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

