<?php

namespace karolsojko\GamificationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('karolsojkoGamificationBundle:Default:index.html.twig', array('name' => 'something'));
    }
}
