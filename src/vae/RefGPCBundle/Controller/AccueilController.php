<?php

namespace vae\RefGPCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use vae\RefGPCBundle\usrClass\InfosBase;

//use vae\UserBundle\Entity\User;
//use Symfony\Component\Security\Core\Exception\AccessDeniedException;
/**
 * Description of AccueilController
 *
 * @author julien test
 */

class AccueilController extends Controller  {
    //put your code here

    public function indexAction($base)
    {
        
        $categorie = 'accueil';
        
        // On vérifie que l'utilisateur dispose bien du rôle ROLE_AUTEUR
        /*if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {

        // Sinon on déclenche une exception « Accès interdit »
        throw new AccessDeniedException('Accès limité aux ADMIN.');
        }*/
    
    
        //Connexion aux entités Doctrine -- Connexion à la bdd
        $em = $this->getDoctrine()->getManager();
        
        $infoBases = new InfosBase($em, $base, $categorie);
            $libelleBase = $infoBases->getLibelleBase();
            $codeBase = $infoBases->getCodeBase();
            $cssMenuHorizontal = $infoBases->getCSSMenuHorizontal();
            
       
    
        
        
        return $this->render('vaeRefGPCBundle:Accueil:accueil.html.twig', array(
        'cssMenuHorizontal' => $cssMenuHorizontal,    
        'libelleBase' => $libelleBase,
        'codeBase' => $codeBase,
        'base' => $base
        
        ));
    }
    
    
  
}

