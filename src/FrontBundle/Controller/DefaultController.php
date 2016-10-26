<?php

namespace FrontBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackBundle\Entity\Mail;
use FrontBundle\Entity\Place;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function indexAction()
    {
        return $this->render('FrontBundle:Default:index.html.twig');
    }

    /**
     * @Route("/support", name="support")
     */
    public function supportAction()
    {
        return $this->render('FrontBundle:Default:support.html.twig');
    }

    /**
     * @Route("/valid/mail", name="valid_mail")
     */
    public function valid_mailAction()
    {
        return $this->render('FrontBundle:Default:valid.html.twig');
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
