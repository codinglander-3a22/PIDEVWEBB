<?php

namespace SalleMatrielBundle\Controller;

use SalleMatrielBundle\Entity\Reservation;
use SalleMatrielBundle\Form\ReservationType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ReservationController extends Controller
{
    public function ajoutreservationAction(Request $request ){

        $res= new Reservation();

        $form=$this->createForm(ReservationType::class,$res);
        $form->handleRequest($request);

        if($form->isValid()){

            $em=$this->getDoctrine()->getManager();
            $em->persist($res);
            $em->flush();
            return $this->redirectToRoute("ajoutReservation");
        }
        return $this->render("@SalleMatriel/back/ajoutReservation.html.twig",array('form_add'=>$form->createView()));
    }
}
