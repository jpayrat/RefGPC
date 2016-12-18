<?php

namespace vae\RefGPCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use vae\RefGPCBundle\usrClass\InfosBase;
use vae\RefGPCBundle\usrClass\RequestIlot;
use vae\RefGPCBundle\Form\searchIlotForm;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


/**
 * Description of Ilot
 *
 * @author julien
 */

class IlotController extends Controller {

    public function ajaxIlotSearchAction($base, Request $request )
    {
        if ($request->isXmlHttpRequest()) {
        
            $categorie = 'ilot'; // Permet de souligner menu vertical 'ilot'
            
            // Déclaration du Doctrine Manager pour faire des requêtes
            $repo = $this->getDoctrine()->getManager();
            
            // Permet de récupérer le code base : T1 ou K2 en fonction de la $base passé par l'URL
            $infoBases = new InfosBase($repo, $base, $categorie);
                $codeBase = $infoBases->getCodeBase();
                
            // récupération des données formulaire
            $valselect = $request->request->get('search_ilot_form');
  
            // Récupération de tous les îlots
            $listIlot = new RequestIlot();
            $listIlots = $listIlot->selectSearchIlot($codeBase, $repo, $valselect);
            
            // Envoi à la vue Twig
            return $this->render('vaeRefGPCBundle:Ilot:IlotSearch.html.twig', array(
                'allIlots' => $listIlots['allIlots'],
                'nbIlots' => $listIlots['nbIlots']
            ));   
        }
        else
        {
         echo 'erreur'; exit;
            // La requête envoyé n'est pas une requête ajax -> Erreur 400
           return new Response('Erreur : ce n\'est pas une requête ajax !', 400);
        }
    }
    
    public function ajaxIlotSearchAllAction($base, Request $request )
    {
        if ($request->isXmlHttpRequest()) {

            $categorie = 'ilot'; // Permet de souligner menu vertical 'ilot'
            
            // Déclaration du Doctrine Manager pour faire des requêtes
            $repo = $this->getDoctrine()->getManager();
            
            // Permet de récupérer le code base : T1 ou K2 en fonction de la $base passé par l'URL
            $infoBases = new InfosBase($repo, $base, $categorie);
                $codeBase = $infoBases->getCodeBase();
            
            // Récupération de tous les îlots
            $listIlot = new RequestIlot();
            $listIlots = $listIlot->selectAllIlots($codeBase, $repo);
            
            // Envoi à la vue Twig 
            return $this->render('vaeRefGPCBundle:Ilot:IlotSearch.html.twig', array(
                'allIlots' => $listIlots['allIlots'],
                'nbIlots' => $listIlots['nbIlots']
            ));
        }
        else
        {
            // La requête envoyé n'est pas une requête ajax -> Erreur 400
            return new Response('Erreur : ce n\'est pas une requête ajax !', 400);
        }
    }
    
    
    public function indexAction($base, Request $request)
    {
        // initialisation du repository
        $repo = $this->getDoctrine()->getManager();
        
        // Gestion du menu horizontal et vertical
        $categorie = 'ilot';  
        
        $infoBases = new InfosBase($repo, $base, $categorie);
            $libelleBase = $infoBases->getLibelleBase();
            $codeBase = $infoBases->getCodeBase();
            $cssMenuHorizontal = $infoBases->getCSSMenuHorizontal();
          
            $cssMenuVertical = $infoBases->getCSSMenuVertical();
         
        // Récupération du nombre d'îlot
        $repositoryIlot = $repo->getRepository('vaeRefGPCBundle:TmIlots');
       // $repositoryCompetence = $repo->getRepository('vaeRefGPCBundle:TIloCompetences');

        $qb = $repositoryIlot->createQueryBuilder('T');
        $qb->select('COUNT(T)')
            ->where('T.ilocodebase = :codebase')
            ->setParameter('codebase', $codeBase);

        $nbIlots = $qb->getQuery()->getSingleScalarResult();
 
    /////////
    // UPDATE TM_Ilots INNER JOIN t_ilo_bandeau ON TM_Ilots.t_ilo_banIdBandeau 
    // = t_ilo_bandeau.banIdBandeau SET TM_Ilots.t_ilo_banIdBandeau = t_ilo_bandeau.banId 
    /////////
    
    //UPDATE TM_Ilots INNER JOIN t_ilo_competences ON TM_Ilots.`t_ilo_coIdCompetence` = t_ilo_competences.coIdCompetence SET TM_Ilots.`t_ilo_coIdCompetence` = t_ilo_competences.coIdCompetence
    
  
    //$ilot = new TmIlots();
        //$competence = new TIloCompetences();
    //AdvertType::class
        
    // Création du formulaire 
    $form = $this->createForm(searchIlotForm::class, array('data'=>$codeBase));

 
 
// Récupération de tous les îlots
//$allIlots = $repositoryIlot->findAll();
 
 
// Récupération des îlots avec des critères de recherche fait à la main
// $allIlots = $repositoryIlot->findBy(
//  array('ilocodebase' => 'T1', 'tIloCoidcompetence' => '14'), // Critere
//  array('ilocodeilot' => 'DESC'),        // Tri
//  10,                              // Limite
//  0                               // Offset
//);
 
 
 // Récupération de la recherche globale avec le LIKE
//    $qb = $repositoryIlot->createQueryBuilder('u');
//   
//     $qb->where('u.ilocodeilot LIKE :search')
//        ->setParameter('search', '%RL%');
//    
//    $globalIlots = $qb->getQuery()
//                     ->getResult();
// 
        
        return $this->render('vaeRefGPCBundle:Ilot:Ilot.html.twig', array(
        'nbIlots' => $nbIlots,
        'cssMenuHorizontal' => $cssMenuHorizontal,
        'cssMenuVertical' => $cssMenuVertical, 
        'libelleBase' => $libelleBase,
        'codeBase' => $codeBase,
        'base' => $base,
        'form' => $form->createView(),
        ));
           
    }
}
