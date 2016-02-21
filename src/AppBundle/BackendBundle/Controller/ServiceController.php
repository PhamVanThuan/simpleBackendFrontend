<?php

namespace AppBundle\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\BackendBundle\Entity\Service;
use AppBundle\BackendBundle\Form\ServiceType;

/**
 * Service controller.
 *
 * @Route("/service")
 */
class ServiceController extends Controller {

    /**
     * Lists all Service entities.
     *
     * @Route("/", name="service_index")
     * @Method("GET")
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $servicesArr = array();
        $serviceShow = 'service_show';
        $serviceEdit = 'service_edit';
        $services = $em->getRepository('BackendBundle:Service')->findAll();
        $serviceHeadArr = array(
            (object) array("name" => "Id"),
            (object) array("name" => "Nombre"),
            (object) array("name" => "Host"),
            (object) array("name" => "Usuario")
        );
        foreach ($services as $s) {
            $serviceElArr = array(
                (object) array("property" => $s->getId()),
                (object) array("property" => $s->getName()),
                (object) array("property" => $s->getHost()),
                (object) array("property" => $s->getUser())
            );
            array_push($servicesArr, $serviceElArr);
        }

        return $this->render('service/index.html.twig', array(
                    'elements' => $services,
                    'arrPropertiesName' => $serviceHeadArr,
                    'arrEl' => $servicesArr,
                    'show' => $serviceShow,
                    'edit' => $serviceEdit
        ));
    }

    /**
     * Creates a new Service entity.
     *
     * @Route("/new", name="service_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $service = new Service();
        $form = $this->createForm('AppBundle\BackendBundle\Form\ServiceType', $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirectToRoute('service_show', array('id' => $service->getId()));
        }

        return $this->render('service/new.html.twig', array(
                    'service' => $service,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Service entity.
     *
     * @Route("/{id}", name="service_show")
     * @Method("GET")
     */
    public function showAction(Service $service) {
        $deleteForm = $this->createDeleteForm($service);
        $serviceArr = array(
            (object) array("name" => "Id", "property" => $service->getId()),
            (object) array("name" => "Nombre", "property" => $service->getName()),
            (object) array("name" => "Host", "property" => $service->getHost()),
            (object) array("name" => "Usuario", "property" => $service->getUser()),
            (object) array("name" => "Contraseña", "property" => $service->getPass())
        );
        return $this->render('service/show.html.twig', array(
                    'service' => $service,
                    'arrProperties' => $serviceArr,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Service entity.
     *
     * @Route("/{id}/edit", name="service_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Service $service) {
        $deleteForm = $this->createDeleteForm($service);
        $editForm = $this->createForm('AppBundle\BackendBundle\Form\ServiceType', $service);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($service);
            $em->flush();

            return $this->redirectToRoute('service_edit', array('id' => $service->getId()));
        }



        return $this->render('service/edit.html.twig', array(
                    'service' => $service,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Service entity.
     *
     * @Route("/{id}", name="service_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Service $service) {
        $form = $this->createDeleteForm($service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($service);
            $em->flush();
        }

        return $this->redirectToRoute('service_index');
    }

    /**
     * Creates a form to delete a Service entity.
     *
     * @param Service $service The Service entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Service $service) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('service_delete', array('id' => $service->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
