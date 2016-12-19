<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace vae\RefGPCBundle\usrClass;

/**
 * Description of requestIlot
 * request ilots
 * @author root
 */
class RequestIlot {
    //put your code here
    
    //private $d = array();
    
    public function selectAllIlots($codeBase, $repo)
    {
        $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
            $d['allIlots'] = $repositoryIlot->findByIlocodebase($codeBase);
            $d['nbIlots'] = count($d['allIlots']);
            
            return $d;   
    }

    public function selectOneIlot($codeBase, $ilot, $repo)
    {
        $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
            $oneIlot = $repositoryIlot->findOneBy(
                array('ilocodebase' => $codeBase, 'ilocodeilot' => $ilot ));
            
            return $oneIlot;   
    }
    
    public function selectSearchIlot($codeBase, $repo, $valselect)
    {
        $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
 
            $qb = $repositoryIlot->createQueryBuilder('u');
            $qb->where('u.ilocodebase = :codebase')
                ->setParameter('codebase', $codeBase);
            
            if($valselect['RechercheGlobale'] != '')
            {
                $qb->leftJoin('u.tSitesSiidsite', 'v' );
                $qb->leftJoin('u.tIloTiidtypeilot', 'w' );
                $qb->leftJoin('u.tIloCoidcompetence', 'x' );
                $qb->leftJoin('u.tIloUsed', 'y' );
                $qb->leftJoin('u.tIloSedidservdem', 'z' );
                $qb->leftJoin('u.tIloEnidentreprise', 'a' );
                $qb->leftJoin('u.tIloDaiddomact', 'b' );
                
                $qb->andwhere('u.ilocodeilot LIKE :globale'
                        . ' OR  w.tiidtypeilot LIKE :globale'
                        . ' OR  w.tilibelletypeilot LIKE :globale'
                        . ' OR  x.coidcompetence LIKE :globale'
                        . ' OR  y.uidused LIKE :globale'
                        . ' OR  z.sedidservdem LIKE :globale'
                        . ' OR  z.sedlibelleservdem LIKE :globale'
                        . ' OR  a.enidentreprise LIKE :globale'
                        . ' OR  a.enlibelleentreprise LIKE :globale'
                        . ' OR  b.daiddomact LIKE :globale'
                        . ' OR  b.dalibelledomact LIKE :globale'                        
                        . ' OR  v.silibellesite LIKE :globale'
                        . ' OR  u.ilolibelleilot LIKE :globale')
                  ->setParameter('globale', '%'.$valselect['RechercheGlobale'].'%');
            }
            if($valselect['IlotText'] != '')
            {
               $qb->andwhere('u.ilocodeilot LIKE :ilottext')
                  ->setParameter('ilottext', '%'.$valselect['IlotText'].'%');
            }
            if($valselect['IlotList'] != '')
            {
               $qb->andwhere('u.ilocodeilot = :ilot')
                  ->setParameter('ilot', $valselect['IlotList']);
            }
            if($valselect['TypeIlot'] != '')
            {
               $qb->andwhere('u.tIloTiidtypeilot = :typeilot')
                  ->setParameter('typeilot', $valselect['TypeIlot']);
            }
            if($valselect['Used'] != '')
            {
               $qb->andwhere('u.tIloUsed = :use')
                  ->setParameter('use', $valselect['Used']);
            } 
            if($valselect['Competences'] != '')
            {
                $qb->andwhere('u.tIloCoidcompetence = :competence')
                ->setParameter('competence', $valselect['Competences']);
            }
            if($valselect['ServiceDem'] != '')
            {
                $qb->andwhere('u.tIloSedidservdem = :servdem')
                ->setParameter('servdem', $valselect['ServiceDem']);
            }
            if($valselect['Entreprise'] != '')
            {
                $qb->andwhere('u.tIloEnidentreprise = :entreprise')
                ->setParameter('entreprise', $valselect['Entreprise']);
            }
            if($valselect['DomaineAct'] != '')
            {
                $qb->andwhere('u.tIloDaiddomact = :domact')
                ->setParameter('domact', $valselect['DomaineAct']);
            }
            if($valselect['Optim'] != '2') // Null val par defaut, et 2 quand "les deux" est coché
            {
                $qb->andwhere('u.ilooptim = :optim')
                ->setParameter('optim', $valselect['Optim']);
            }
            if($valselect['SiteGeo'] != '')
            {
                $qb->andwhere('u.tSitesSiidsite = :site')
                ->setParameter('site', $valselect['SiteGeo']);
            }
               
            $d['allIlots'] = $qb->getQuery()->getResult();
            $d['nbIlots'] = count($d['allIlots']);
            
            return $d;
    }
    
}
