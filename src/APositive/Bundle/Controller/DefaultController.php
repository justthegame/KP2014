<?php

namespace APositive\Bundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_index")
     * 
     */
    public function indexAction()
    {
        return $this->render('APositiveBundle:Default:index.html.twig', array());
    }
    
    /**
     * @Route("/info", name="_info")
     * @Template()
     */
    public function infoAction()
    {
        return $this->render('APositiveBundle:Default:info.html.twig', array());
    }
}
