<?php

namespace vae\RefGPCBundle\usrClass;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use Doctrine\ORM\EntityRepository;
// N'oubliez pas ce use
use Doctrine\ORM\QueryBuilder;

/**
 * Description of InfosBase
 *
 * @author julien
 */
class InfosBase {
    //put your code here
    
    private $libelleBase;
    private $codeBase;
    public $base;
    private $menuHorizontal = array();
    private $menuVertical = array();
    
    
    public function __construct($repo, $base, $categorie)
    {
        
        $this->base = $base;
        $this->categorie = $categorie;
        
        // Récupération des infos dans la bdd par rapport à la base de l'url
        $repository = $repo->getRepository('vaeRefGPCBundle:TInfosbase');
        $req = $repository->find($base);
    
        $this->libelleBase = $req->getIblibellebase();
        $this->codeBase = $req->getIbcodebase();
        
        $this->menuHorizontal['classCSSLienLR'] = $this->classCSSLienActifHorizontal('LR');
        $this->menuHorizontal['classCSSLienMP'] = $this->classCSSLienActifHorizontal('MP');
        $this->menuHorizontal['classCSSLienAD'] = $this->classCSSLienActifHorizontal('AD');
        
        $this->menuVertical['classCSSLienIlot'] = $this->classCSSLienActifVertical('ilot');
        $this->menuVertical['classCSSLienCentre'] = $this->classCSSLienActifVertical('centre');
    
    }
    
    /**
    +     * Retourne 'actif' si la base est celle de l'instance
    +     * @param type $base ! 'LR' ou 'MP' ou 'AD'
    +     * @return String 'actif' ou ''
    +     */
    protected function classCSSLienActifHorizontal($base) { return $base == $this->base ?  'actif' : ''; }
    
    
    /**
    +     * Retourne 'actif' si la categorie est celle de l'instance
    +     * @param type $categorie ! 'ilot' ou 'centre'
    +     * @return String 'actif' ou ''
    +     */
    protected function classCSSLienActifVertical($categorie) { return $categorie == $this->categorie ?  'actif' : ''; }
    
    
    public function getLibelleBase()
    {
        return $this->libelleBase;
    }
    
    public function getCodeBase()
    {
        return $this->codeBase;
    }
    
    public function getCSSMenuHorizontal()
    {
        return $this->menuHorizontal;
    }
    
    public function getCSSMenuVertical()
    {
        return $this->menuVertical;
    }
    
}
