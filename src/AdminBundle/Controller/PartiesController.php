<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Parties;
use AdminBundle\Form\PartiesType;

/**
 * Parties controller.
 *
 * @Route("/parties")
 */
class PartiesController extends Controller
{
    /**
     * Lists all Parties entities.
     *
     * @Route("/", name="parties_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $parties = $em->getRepository('AdminBundle:Parties')->findAll();

        return $this->render('parties/index.html.twig', array(
            'parties' => $parties,
        ));
    }

    /**
     * Creates a new Parties entity.
     *
     * @Route("/new", name="parties_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $party = new Parties();
        $form = $this->createForm('AdminBundle\Form\PartiesType', $party);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($party);
            $em->flush();

            return $this->redirectToRoute('parties_show', array('id' => $party->getId()));
        }

        return $this->render('parties/new.html.twig', array(
            'party' => $party,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Parties entity.
     *
     * @Route("/{id}", name="parties_show")
     * @Method("GET")
     */
    public function showAction(Parties $party)
    {
        $deleteForm = $this->createDeleteForm($party);

        return $this->render('parties/show.html.twig', array(
            'party' => $party,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Parties entity.
     *
     * @Route("/{id}/edit", name="parties_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Parties $party)
    {
        $deleteForm = $this->createDeleteForm($party);
        $editForm = $this->createForm('AdminBundle\Form\PartiesType', $party);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($party);
            $em->flush();

            return $this->redirectToRoute('parties_edit', array('id' => $party->getId()));
        }

        return $this->render('parties/edit.html.twig', array(
            'party' => $party,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Parties entity.
     *
     * @Route("/{id}", name="parties_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Parties $party)
    {
        $form = $this->createDeleteForm($party);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($party);
            $em->flush();
        }

        return $this->redirectToRoute('parties_index');
    }

    /**
     * Creates a form to delete a Parties entity.
     *
     * @param Parties $party The Parties entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Parties $party)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('parties_delete', array('id' => $party->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
