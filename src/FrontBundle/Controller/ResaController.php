<?php

namespace FrontBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackBundle\Entity\Mail;
use BackBundle\Entity\Party;
use BackBundle\Form\ReservationType;
use BackBundle\Entity\Reservation;
use Symfony\Component\HttpFoundation\Session\Session;


class ResaController extends Controller
{
    /**
     * @Route("/party{keyword}", name="reservation_new_user")
     * @ParamConverter("party", class="BackBundle:Party")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Party $party)
    {
        $reservation = new Reservation();
        $form = $this->createForm('BackBundle\Form\ReservationType', $reservation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // recupération de la chaine de caractère "mail" saisie dans le form
            $email = $reservation->getMail()->getMail();
            // connexion à la base de donnée via docrine
            $em = $this->getDoctrine()->getManager();
            // recherche si le mail saisi dans le form existe déjà dans la table Mail
            $mail = $em->getRepository('BackBundle:Mail')->findOneByMail($email);
            // s'il existe déjà, on écrase le mail du form par celui existant en base de données (donc pas de création d'un nouveau mail)
            if ($mail) {
                $reservation->setMail($mail);
            }

            $reservation->setParty($party);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservation_show', array('id' => $reservation->getId()));
        }

        return $this->render('reservation/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));

    }

   /* /**
     * @Route("/resa", name="resa_ok")
     * @Method({"GET")
     */

  /*  public function resaAction(Reservation $reservation)
    {
        $mail = $reservation->getMail();
        $party = $reservation->getNbtickets()->getMail();
        $em = $this->getDoctrine()->getManager();
        $reservation = $em->getRepository('BackBundle:Party')->findOneBy('id')
            ->getRepository('BackBundle:Reservation')->findOneBy('party_id')
            ->getRepository('BackBundle:Mail')->findOneBy('Mail_id');
        return $this->redirectToRoute('home', array('title' => $party->getTitle(),
            'place' => $party->getPlace(),
            'mail' => $mail->getMail(),
            'nbTickets' => $reservation->getNbTickets()));

    }*/
}