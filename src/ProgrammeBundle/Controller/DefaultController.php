<?php

namespace ProgrammeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('@Programme/back/programme.html.twig', array('user' => $user));
    }
}
