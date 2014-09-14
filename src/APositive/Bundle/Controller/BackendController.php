<?php

namespace APositive\Bundle\Controller;

use APositive\Bundle\Entity\Karyawan;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller {

    public function loginpageAction() {
        return $this->render('APositiveBundle:BackEnd:login.html.twig', array());
    }
    
    public function checkloginAction($username, $password){
        $manager = $this->getDoctrine()->getManager();
        $id = $manager->getRepository('APositiveBundle:Karyawan')
                ->findBy(array('username' => $username, 'password' => $password));
        if ($id)
        {
            return $this->forward('APositiveBundle:Backend:index', array(
                'id' => $id->getID()));
        }
        else
        {
            return $this->render('APositiveBundle:BackEnd:login.html.twig', array('status'=>'error'));
        }
    }

    public function indexAction($id) {
        return $this->render('APositiveBundle:BackEnd:index.html.twig', array('id' => $id));
    }

    public function registerAction(){
        
    }
    
    
}
