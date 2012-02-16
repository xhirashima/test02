<?php

namespace My\SecondBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class UserController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('MySecondBundle:Default:index.html.twig', array('name' => $name));
    }



	public function newAction()
	{

		return $this->render('MySecondBundle:User:new.html.twig');
	}

}
