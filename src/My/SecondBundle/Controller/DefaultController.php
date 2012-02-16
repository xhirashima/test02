<?php

namespace My\SecondBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MySecondBundle:Default:index.html.twig', array('name' => $name));
    }
}
