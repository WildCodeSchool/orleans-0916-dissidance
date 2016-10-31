<?php

namespace BackBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackBundle\Entity\Mail;

/**
 * Mail controller.
 *
 * @Route("/mail")
 */
class MailController extends Controller
{
    /**
     * Lists all Mail entities.
     *
     * @Route("/", name="mail_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $mails = $em->getRepository('BackBundle:Mail')->findAll();

        return $this->render('mail/index.html.twig', array(
            'mails' => $mails,
        ));
    }

    /**
     * Creates a new Mail entity.
     *
     * @Route("/new", name="mail_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $mail = new Mail();
        $form = $this->createForm('BackBundle\Form\MailType', $mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('mail_show', array('id' => $mail->getId()));
        }

        return $this->render('mail/new.html.twig', array(
            'mail' => $mail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Mail entity.
     *
     * @Route("/{id}", name="mail_show")
     * @Method("GET")
     */
    public function showAction(Mail $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);

        return $this->render('mail/show.html.twig', array(
            'mail' => $mail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Mail entity.
     *
     * @Route("/{id}/edit", name="mail_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Mail $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);
        $editForm = $this->createForm('BackBundle\Form\MailType', $mail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('mail_edit', array('id' => $mail->getId()));
        }

        return $this->render('mail/edit.html.twig', array(
            'mail' => $mail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Mail entity.
     *
     * @Route("/{id}", name="mail_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Mail $mail)
    {
        $form = $this->createDeleteForm($mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($mail);
            $em->flush();
        }

        return $this->redirectToRoute('mail_index');
    }

    /**
     * Creates a form to delete a Mail entity.
     *
     * @param Mail $mail The Mail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Mail $mail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mail_delete', array('id' => $mail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     *
     * @Route("/mail/list", name="mail_list")
     * @Method({"GET"})
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getManager();
        $emails = $em->getRepository('BackBundle:Mail')->findAll();

        return $this->render('mail/mailList.html.twig', array('emails' => $emails,));
    }

}
