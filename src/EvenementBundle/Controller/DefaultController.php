<?php

namespace EvenementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {


        return $this->render('@Evenement/Default/index.html.twig');
    }

    public function gestionEvenementAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
       // var_dump($user);
        return $this->render('@Evenement/back/Evenement.html.twig', array('user' => $user));
    }
}
