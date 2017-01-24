<?php

namespace FrontBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FrontBundle\Form\ContactType;
use FrontBundle\Form\ContactPfuType;
use FrontBundle\Entity\Contact;
use FrontBundle\Entity\ContactPFU;
use Symfony\Component\HttpFoundation\Session\Session;



class ContactController extends Controller
{


    /**
     * @Route("/contact", name="contact")
     */
    public function ContactAction(Request $request)
    {
        $contact = new ContactPFU();
        $form = $this->createForm(new ContactPfuType(), $contact);
        $session = $request->getSession();
        $session->start();


        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $form->handleRequest($request);

            if ($form->isValid()) {
                $file = $contact->getPicture();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('upload_directory'),
                    $fileName
                );
                $contact->setPicture($fileName);


                $message = \Swift_Message::newInstance()
                    ->setSubject('Contact from Dissi.dance')
                    ->setFrom('dissi@dance.fr')
                    ->setTo('dissidance777@gmail.com')
                    ->setBody($this->renderView('contact/SentMailPlace.txt.twig', array('contact' => $contact)));
                $this->get('mailer')->send($message);

                $this->addFlash('contact-notice', 'Your contact Dissidance was successfully sent. Thank you!');

                return $this->redirectToRoute('contact');
            }
        }

        return $this->render('FrontBundle:Default:contactPFU.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
