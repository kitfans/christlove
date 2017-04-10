<?php

namespace KitFriendBundle\Controller;

use KitFriendBundle\Entity\MemberPartner;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Memberpartner controller.
 *
 */
class MemberPartnerController extends Controller
{
    /**
     * Lists all memberPartner entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $memberPartners = $em->getRepository('KitFriendBundle:MemberPartner')->findAll();

        return $this->render('KitFriendBundle:MemberPartner:index.html.twig', array(
            'memberPartners' => $memberPartners,
        ));
    }

    /**
     * Creates a new memberPartner entity.
     *
     */
    public function newAction(Request $request)
    {
        $memberPartner = new Memberpartner();
        $form = $this->createForm('KitFriendBundle\Form\MemberPartnerType', $memberPartner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($memberPartner);
            $em->flush($memberPartner);

            return $this->redirectToRoute('memberpartner_show', array('id' => $memberPartner->getId()));
        }

        return $this->render('KitFriendBundle:MemberPartner:new.html.twig', array(
            'memberPartner' => $memberPartner,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a memberPartner entity.
     *
     */
    public function showAction(MemberPartner $memberPartner)
    {
        $deleteForm = $this->createDeleteForm($memberPartner);

        return $this->render('KitFriendBundle:MemberPartner:show.html.twig', array(
            'memberPartner' => $memberPartner,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing memberPartner entity.
     *
     */
    public function editAction(Request $request, MemberPartner $memberPartner)
    {
        $deleteForm = $this->createDeleteForm($memberPartner);
        $editForm = $this->createForm('KitFriendBundle\Form\MemberPartnerType', $memberPartner);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('memberpartner_edit', array('id' => $memberPartner->getId()));
        }

        return $this->render('KitFriendBundle:MemberPartner:edit.html.twig', array(
            'memberPartner' => $memberPartner,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a memberPartner entity.
     *
     */
    public function deleteAction(Request $request, MemberPartner $memberPartner)
    {
        $form = $this->createDeleteForm($memberPartner);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($memberPartner);
            $em->flush($memberPartner);
        }

        return $this->redirectToRoute('memberpartner_index');
    }

    /**
     * Creates a form to delete a memberPartner entity.
     *
     * @param MemberPartner $memberPartner The memberPartner entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MemberPartner $memberPartner)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('memberpartner_delete', array('id' => $memberPartner->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
