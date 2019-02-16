<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexadminAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        //var_dump($user);
        return $this->render('@User/back/index.html.twig', array('user' => $user));
    }

    public function indexAction()
    {
        return $this->render('@User/front/index.html.twig');
    }
}
