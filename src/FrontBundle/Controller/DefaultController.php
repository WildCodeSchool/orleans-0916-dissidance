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


class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $parties = $em->getRepository('BackBundle:Party')->findAll();

        return $this->render('FrontBundle:Default:index.html.twig', array(
            'parties' => $parties,
        ));

    }
    /**
     * @Route("/support", name="support")
     */
    public function supportAction()
    {
        return $this->render('FrontBundle:Default:support.html.twig');
    }

    /**
     * @Route("/Legal", name="legal_mentions")
     */
    public function mentionsAction()
    {
        return $this->render('FrontBundle:Default:mentions.html.twig');
    }

    /**
     * @Route("/valid/mail", name="valid_mail")
     */
    public function valid_mailAction()
    {
        return $this->render('FrontBundle:Default:valid.html.twig');
    }

    /**
     * @Route("/tuile", name="tuile")
     */
    public function tuileAction()
    {
        return $this->render('FrontBundle:Default:tuile.html.twig');
    }

    /**
     * Creates a new mail entity.
     *
     * @Route("/new/mail", name="new_mail")
     * @Method({"GET", "POST"})
     */
    public function new_mailAction(Request $request)
    {
        $mail = new Mail();
        $form = $this->createForm('BackBundle\Form\MailType', $mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('support');
        }


        return $this->render('mail/new_mail.html.twig', array(
            'form' => $form->createView(),
        ));
    }






}
