<?php

namespace vae\RefGPCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TRoles
 *
 * @ORM\Table(name="t_roles")
 * @ORM\Entity
 */
class TRoles
{
    /**
     * @var string
     *
     * @ORM\Column(name="rolLibelleRole", type="string", length=45, nullable=true)
     */
    private $rollibellerole;

    /**
     * @var integer
     *
     * @ORM\Column(name="rolRole", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rolrole;



    /**
     * Set rollibellerole
     *
     * @param string $rollibellerole
     *
     * @return TRoles
     */
    public function setRollibellerole($rollibellerole)
    {
        $this->rollibellerole = $rollibellerole;

        return $this;
    }

    /**
     * Get rollibellerole
     *
     * @return string
     */
    public function getRollibellerole()
    {
        return $this->rollibellerole;
    }

    /**
     * Get rolrole
     *
     * @return integer
     */
    public function getRolrole()
    {
        return $this->rolrole;
    }
}
