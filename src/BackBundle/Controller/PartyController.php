<?php

namespace BackBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use BackBundle\Entity\Party;
use BackBundle\Form\PartyType;
use BackBundle\Entity\Reservation;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Party controller.
 *
 * @Route("/party")
 */
class PartyController extends Controller
{
    /**
     * Lists all Party entities.
     *
     * @Route("/", name="party_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $party = $em->getRepository('BackBundle:Party')->findAll();

        return $this->render('party/index.html.twig', array(
            'party' => $party,
        ));
    }

    /**
     * Creates a new Party entity.
     *
     * @Route("/new", name="party_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $party = new Party();
        $form = $this->createForm('BackBundle\Form\PartyType', $party);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //upload imgCover

            $file = $party->getImgCover();
            // Generate a unique name for the file before saving it
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            // Move the file to the directory where brochures are stored
            $file->move(
                $this->getParameter('uploadCover_directory'),
                $fileName
            );


            $em = $this->getDoctrine()->getManager();
            $em->persist($party);
            $em->flush();

            return $this->redirectToRoute('party_show', array('id' => $party->getId()));
        }

        return $this->render('party/new.html.twig', array(
            'party' => $party,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Party entity.
     *
     * @Route("/{id}", name="party_show")
     * @Method("GET")
     */
    public function showAction(Party $party)
    {
        $deleteForm = $this->createDeleteForm($party);

        return $this->render('party/show.html.twig', array(
            'party' => $party,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Party entity.
     *
     * @Route("/{id}/edit", name="party_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Party $party)
    {
        $deleteForm = $this->createDeleteForm($party);
        $editForm = $this->createForm('BackBundle\Form\PartyType', $party);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($party);
            $em->flush();

            return $this->redirectToRoute('party_edit', array('id' => $party->getId()));
        }

        return $this->render('party/edit.html.twig', array(
            'party' => $party,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Party entity.
     *
     * @Route("/{id}", name="party_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Party $party)
    {
        $form = $this->createDeleteForm($party);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($party);
            $em->flush();
        }

        return $this->redirectToRoute('party_index');
    }

    /**
     * Creates a form to delete a Party entity.
     *
     * @param Party $party The Party entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Party $party)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('party_delete', array('id' => $party->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
