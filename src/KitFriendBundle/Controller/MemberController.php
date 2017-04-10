<?php

namespace KitFriendBundle\Controller;

use KitFriendBundle\Entity\Member;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Member controller.
 *
 */
class MemberController extends Controller
{
    /**
     * Lists all member entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $members = $em->getRepository('KitFriendBundle:Member')->findAll();

        return $this->render('KitFriendBundle:Member:index.html.twig', array(
            'members' => $members,
        ));
    }

    /**
     * Creates a new member entity.
     *
     */
    public function newAction(Request $request)
    {
        $member = new Member();
        $form = $this->createForm('KitFriendBundle\Form\MemberType', $member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($member);
            $em->flush($member);

            return $this->redirectToRoute('member_show', array('id' => $member->getId()));
        }

        return $this->render('KitFriendBundle:Member:new.html.twig', array(
            'member' => $member,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a member entity.
     *
     */
    public function showAction(Member $member)
    {
        $deleteForm = $this->createDeleteForm($member);

        return $this->render('KitFriendBundle:Member:show.html.twig', array(
            'member' => $member,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing member entity.
     *
     */
    public function editAction(Request $request, Member $member)
    {
        $deleteForm = $this->createDeleteForm($member);
        $editForm = $this->createForm('KitFriendBundle\Form\MemberType', $member);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('member_edit', array('id' => $member->getId()));
        }

        return $this->render('KitFriendBundle:Member:edit.html.twig', array(
            'member' => $member,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a member entity.
     *
     */
    public function deleteAction(Request $request, Member $member)
    {
        $form = $this->createDeleteForm($member);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($member);
            $em->flush($member);
        }

        return $this->redirectToRoute('member_index');
    }

    /**
     * Creates a form to delete a member entity.
     *
     * @param Member $member The member entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Member $member)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('member_delete', array('id' => $member->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
