<?php

namespace SalleMatrielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function materielAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('@SalleMatriel/back/materiel.html.twig', array('user' => $user));
    }

    public function salleAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $this->render('@SalleMatriel/back/salle.html.twig', array('user' => $user));
    }
}
