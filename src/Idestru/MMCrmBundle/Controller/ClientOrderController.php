<?php

namespace Idestru\MMCrmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Idestru\MMCrmBundle\Entity\ClientOrder;
use Idestru\MMCrmBundle\Form\ClientOrderType;

/**
 * ClientOrder controller.
 *
 */
class ClientOrderController extends Controller
{

    /**
     * Lists all ClientOrder entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MMCrmBundle:ClientOrder')->findAll();

        return $this->render('MMCrmBundle:ClientOrder:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ClientOrder entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ClientOrder();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('order_show', array('id' => $entity->getId())));
        }

        return $this->render('MMCrmBundle:ClientOrder:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ClientOrder entity.
     *
     * @param ClientOrder $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ClientOrder $entity)
    {
        $form = $this->createForm(new ClientOrderType(), $entity, array(
            'action' => $this->generateUrl('order_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ClientOrder entity.
     *
     */
    public function newAction()
    {
        $entity = new ClientOrder();
        $form   = $this->createCreateForm($entity);

        return $this->render('MMCrmBundle:ClientOrder:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ClientOrder entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MMCrmBundle:ClientOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientOrder entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MMCrmBundle:ClientOrder:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ClientOrder entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MMCrmBundle:ClientOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientOrder entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MMCrmBundle:ClientOrder:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ClientOrder entity.
    *
    * @param ClientOrder $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ClientOrder $entity)
    {
        $form = $this->createForm(new ClientOrderType(), $entity, array(
            'action' => $this->generateUrl('order_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ClientOrder entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MMCrmBundle:ClientOrder')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ClientOrder entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('order_edit', array('id' => $id)));
        }

        return $this->render('MMCrmBundle:ClientOrder:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ClientOrder entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MMCrmBundle:ClientOrder')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ClientOrder entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('order'));
    }

    /**
     * Creates a form to delete a ClientOrder entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('order_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
