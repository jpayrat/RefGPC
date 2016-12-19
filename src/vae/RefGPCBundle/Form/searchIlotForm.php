<?php
namespace vae\RefGPCBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;


class searchIlotForm extends AbstractType
{
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $codeBase = $options['data']['data'];
        
        //print_r($options);
        //exit();////////////
        // test
        
        $builder
                ->add('RechercheGlobale', TextType::class, array(
                    'label' => 'Recherche Globale',
                ))
                ->add('IlotText', TextType::class, array(
                    'attr'=> array('maxlength' => 3, 'size' => 3),
                ))
                ->add('IlotList', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TmIlots',  
                    'placeholder'=> 'Tous',
                    'query_builder'=> function ($TmIlots) use ($codeBase)
                    {
                        return $TmIlots->createQueryBuilder('a')
                            ->where('a.ilocodebase = :codebase')
                            ->setParameter('codebase', $codeBase);
                    },
                    'choice_label'=>function ($TmIlots) {
                        return $TmIlots->getFormCodeIlotETLibelle();
                    },
                    'choice_value' => 'iloCodeIlot',
                )) 
                ->add('TypeIlot', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TIloTypeilot',  
                    'placeholder'=> 'Tous',
                    'choice_label'=> 'tiidtypeilot',
                    'choice_value' => 'tiidtypeilot',
                ))
                ->add('Used', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TIloUsed',  
                    'placeholder'=> 'Tous',
                    'choice_label'=> 'uidused',
                    'choice_value' => 'uidused',
                ))    
                ->add('Competences', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TIloCompetences',  
                    'placeholder'=> 'Tous',
                    'query_builder'=> function ($TIloCompetences) use ($codeBase)
                    {
                        return $TIloCompetences->createQueryBuilder('a')
                            ->where('a.cocodebase = :codebase')
                            ->setParameter('codebase', $codeBase);
                    },
                    'choice_label'=>'coIdCompetence',
                    'choice_value' => 'coId',
                ))     
                ->add('ServiceDem', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TIloServicedemandeur',  
                    'placeholder'=> 'Tous',
                    'query_builder'=> function ($TIloServicedemandeur) use ($codeBase)
                    {
                        return $TIloServicedemandeur->createQueryBuilder('a')
                            ->where('a.sedcodebase = :codebase')
                            ->setParameter('codebase', $codeBase);
                    },
                    'choice_label'=>'sedidservdem',
                    'choice_value' => 'sedid',
                ))   
                ->add('Entreprise', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TIloEntreprise',  
                    'placeholder'=> 'Tous',
                    'query_builder'=> function ($TIloEntreprise) use ($codeBase)
                    {
                        return $TIloEntreprise->createQueryBuilder('a')
                            ->where('a.encodebase = :codebase')
                            ->setParameter('codebase', $codeBase);
                    },
                    'choice_label'=>function ($TIloEntreprise) {
                        return $TIloEntreprise->getFormLibelleEntrepriseETId();
                    },
                    'choice_value' => 'enid',
                ))           
                ->add('SiteGeo', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TSites',  
                    'placeholder'=> 'Tous',
                    'query_builder'=> function ($TSites) use ($codeBase)
                    {
                        return $TSites->createQueryBuilder('a')
                            ->where('a.sicodebase = :codebase')
                            ->setParameter('codebase', $codeBase);
                    },
                    'choice_label'=> 'silibellesite',
                    'choice_value' => 'siid',
                ))                 
                ->add('DomaineAct', EntityType::class, array(
                    'class'=>'vaeRefGPCBundle:TIloDomaineactivite',  
                    'placeholder'=> 'Tous',
                    'query_builder'=> function ($TIloDomaineactivite) use ($codeBase)
                    {
                        return $TIloDomaineactivite->createQueryBuilder('a')
                            ->where('a.dacodebase = :codebase')
                            ->setParameter('codebase', $codeBase);
                    },
                    'choice_label'=>function ($TIloDomaineactivite) {
                        return $TIloDomaineactivite->getFormLibelleDomActETId();
                    },
                    'choice_value' => 'daid',
                ))    
                ->add('Optim', ChoiceType::class, array(
                    'label'    => 'Optim ?',
                    'choices' => array(
                        'Oui' => '1',
                        'non' => '0',
                        'Les deux' => '2'),
                    'required' => false, 
                    'placeholder' => false,
                    'expanded' => true,
                    'multiple' => false,
                    'data' => 2,
                ))            
            ; 
    }
    
    
    
    public function getName()
    {
        return 'user_register';
    }   
    
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'vae\RefGPCBundle\Entity\TmIlots',
            'data' => null,
        ));
    }
    
}