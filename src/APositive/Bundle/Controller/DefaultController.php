<?php

namespace APositive\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('APositiveBundle:Default:index.html.twig', array());
    }
}
