<?php

namespace LicoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use LicoBundle\Entity\Environnement;
use LicoBundle\Form\EnvironnementType;

/**
 * Environnement controller.
 *
 */
class EnvironnementController extends Controller
{
    /**
     * Lists all Environnement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $environnements = $em->getRepository('LicoBundle:Environnement')->findAll();

        return $this->render('LicoBundle::page3.html.twig', array(
            'environnements' => $environnements,
        ));
    }

    /**
     * Creates a new Environnement entity.
     *
     */
    public function newAction(Request $request)
    {
        $environnement = new Environnement();
        $form = $this->createForm('LicoBundle\Form\EnvironnementType', $environnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($environnement);
            $em->flush();

            return $this->redirectToRoute('environnement_show', array('id' => $environnement->getId()));
        }

        return $this->render('environnement/new.html.twig', array(
            'environnement' => $environnement,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Environnement entity.
     *
     */
    public function showAction(Environnement $environnement)
    {
        $deleteForm = $this->createDeleteForm($environnement);

        return $this->render('environnement/show.html.twig', array(
            'environnement' => $environnement,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Environnement entity.
     *
     */
    public function editAction(Request $request, Environnement $environnement)
    {
        $deleteForm = $this->createDeleteForm($environnement);
        $editForm = $this->createForm('LicoBundle\Form\EnvironnementType', $environnement);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($environnement);
            $em->flush();

            return $this->redirectToRoute('environnement_edit', array('id' => $environnement->getId()));
        }

        return $this->render('environnement/edit.html.twig', array(
            'environnement' => $environnement,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Environnement entity.
     *
     */
    public function deleteAction(Request $request, Environnement $environnement)
    {
        $form = $this->createDeleteForm($environnement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($environnement);
            $em->flush();
        }

        return $this->redirectToRoute('environnement_index');
    }

    /**
     * Creates a form to delete a Environnement entity.
     *
     * @param Environnement $environnement The Environnement entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Environnement $environnement)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('environnement_delete', array('id' => $environnement->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
