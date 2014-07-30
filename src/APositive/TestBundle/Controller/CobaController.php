<?php

namespace APositive\TestBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CobaController extends Controller
{
    public function indexAction()
    {
        //return new Response('<html><body>Test!</body></html>');
        return $this->render('APositiveTestBundle:Coba:index.html.twig',array());
    }
}

?>