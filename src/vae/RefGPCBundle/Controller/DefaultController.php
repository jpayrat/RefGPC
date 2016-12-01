<?php

namespace vae\RefGPCBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('vaeRefGPCBundle:Default:Ilot.html.twig');
    }
}
