<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Reservations;
use AdminBundle\Form\ReservationsType;

/**
 * Reservations controller.
 *
 * @Route("/reservations")
 */
class ReservationsController extends Controller
{
    /**
     * Lists all Reservations entities.
     *
     * @Route("/", name="reservations_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reservations = $em->getRepository('AdminBundle:Reservations')->findAll();

        return $this->render('reservations/index.html.twig', array(
            'reservations' => $reservations,
        ));
    }

    /**
     * Creates a new Reservations entity.
     *
     * @Route("/new", name="reservations_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $reservation = new Reservations();
        $form = $this->createForm('AdminBundle\Form\ReservationsType', $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservations_show', array('id' => $reservation->getId()));
        }

        return $this->render('reservations/new.html.twig', array(
            'reservation' => $reservation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Reservations entity.
     *
     * @Route("/{id}", name="reservations_show")
     * @Method("GET")
     */
    public function showAction(Reservations $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);

        return $this->render('reservations/show.html.twig', array(
            'reservation' => $reservation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Reservations entity.
     *
     * @Route("/{id}/edit", name="reservations_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Reservations $reservation)
    {
        $deleteForm = $this->createDeleteForm($reservation);
        $editForm = $this->createForm('AdminBundle\Form\ReservationsType', $reservation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            return $this->redirectToRoute('reservations_edit', array('id' => $reservation->getId()));
        }

        return $this->render('reservations/edit.html.twig', array(
            'reservation' => $reservation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Reservations entity.
     *
     * @Route("/{id}", name="reservations_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Reservations $reservation)
    {
        $form = $this->createDeleteForm($reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($reservation);
            $em->flush();
        }

        return $this->redirectToRoute('reservations_index');
    }

    /**
     * Creates a form to delete a Reservations entity.
     *
     * @param Reservations $reservation The Reservations entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Reservations $reservation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reservations_delete', array('id' => $reservation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
