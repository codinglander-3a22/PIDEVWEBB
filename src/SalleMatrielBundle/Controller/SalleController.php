<?php

namespace SalleMatrielBundle\Controller;

use SalleMatrielBundle\Entity\Salle;
use SalleMatrielBundle\Form\SalleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SalleController extends Controller
{
    public function AjoutSalleAction(Request $request ){

        $salle= new Salle();

        $form=$this->createForm(SalleType::class,$salle);
        $form->handleRequest($request);

        if($form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($salle);
            $em->flush();
            return $this->redirectToRoute("ajoutSalle");
        }
        return $this->render("@SalleMatriel/back/ajoutSalle.html.twig",array('form_add'=>$form->createView()));
    }
}
