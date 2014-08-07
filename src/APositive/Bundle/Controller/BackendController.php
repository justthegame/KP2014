<?php

namespace APositive\Bundle\Controller;

use APositive\Bundle\Entity\Karyawan;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller {

    public function loginpageAction() {
        return $this->render('APositiveBundle:BackEnd:login.html.twig', array());
    }
    
    public function checkloginAction(){
        $manager = $this->getDoctrine()->getManager();
        $id = $manager->getRepository('APositiveBundle:Karyawan')
                ->findBy(array(''));
        return $this->render('APositiveBundle:BackEnd:index.html.twig', array());
    }

    public function indexAction() {
        return $this->render('APositiveBundle:BackEnd:index.html.twig', array());
    }

    public function registerAction(){
        
    }
    
    
}
