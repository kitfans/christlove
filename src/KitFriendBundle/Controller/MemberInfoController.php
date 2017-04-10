<?php

namespace KitFriendBundle\Controller;

use KitFriendBundle\Entity\MemberInfo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Memberinfo controller.
 *
 */
class MemberInfoController extends Controller
{
    /**
     * Lists all memberInfo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $memberInfos = $em->getRepository('KitFriendBundle:MemberInfo')->findAll();

        return $this->render('KitFriendBundle:MemberInfo:index.html.twig', array(
            'memberInfos' => $memberInfos,
        ));
    }

    /**
     * Creates a new memberInfo entity.
     *
     */
    public function newAction(Request $request)
    {
        $memberInfo = new Memberinfo();
        $form = $this->createForm('KitFriendBundle\Form\MemberInfoType', $memberInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($memberInfo);
            $em->flush($memberInfo);

            return $this->redirectToRoute('memberinfo_show', array('id' => $memberInfo->getId()));
        }

        return $this->render('KitFriendBundle:MemberInfo:new.html.twig', array(
            'memberInfo' => $memberInfo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a memberInfo entity.
     *
     */
    public function showAction(MemberInfo $memberInfo)
    {
        $deleteForm = $this->createDeleteForm($memberInfo);

        return $this->render('KitFriendBundle:MemberInfo:show.html.twig', array(
            'memberInfo' => $memberInfo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing memberInfo entity.
     *
     */
    public function editAction(Request $request, MemberInfo $memberInfo)
    {
        $deleteForm = $this->createDeleteForm($memberInfo);
        $editForm = $this->createForm('KitFriendBundle\Form\MemberInfoType', $memberInfo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('memberinfo_edit', array('id' => $memberInfo->getId()));
        }

        return $this->render('KitFriendBundle:MemberInfo:edit.html.twig', array(
            'memberInfo' => $memberInfo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a memberInfo entity.
     *
     */
    public function deleteAction(Request $request, MemberInfo $memberInfo)
    {
        $form = $this->createDeleteForm($memberInfo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($memberInfo);
            $em->flush($memberInfo);
        }

        return $this->redirectToRoute('memberinfo_index');
    }

    /**
     * Creates a form to delete a memberInfo entity.
     *
     * @param MemberInfo $memberInfo The memberInfo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MemberInfo $memberInfo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('memberinfo_delete', array('id' => $memberInfo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
