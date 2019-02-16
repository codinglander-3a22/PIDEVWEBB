<?php

namespace EvenementBundle\Controller;

use EvenementBundle\Entity\TypeEvennement;
use EvenementBundle\Form\TypeEvennementType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TypeEvennementController extends Controller
{


    public function ajoutAction(Request $request){
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $type=new TypeEvennement();
        $form = $this->createForm(TypeEvennementType::class,$type);
        $form->handleRequest($request);

        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($type);
            $em->flush();
        }
        return $this->render('@Evenement/back/TypeEvennement.html.twig',array("form"=>$form->createView(),'user' => $user));
    }

}
