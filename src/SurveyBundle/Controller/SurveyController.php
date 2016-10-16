<?php

namespace SurveyBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use SurveyBundle\Entity\Survey;
use SurveyBundle\Form\SurveyType;

/**
 * Survey controller.
 *
 */
class SurveyController extends Controller
{
    /**
     * Lists all Survey entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $surveys = $em->getRepository('SurveyBundle:Survey')->findAll();

        return $this->render('survey/index.html.twig', array(
            'surveys' => $surveys,
        ));
    }

    /**
     * Creates a new Survey entity.
     *
     */
    public function newAction(Request $request)
    {
        $survey = new Survey();
        $form = $this->createForm('SurveyBundle\Form\SurveyType', $survey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($survey);
            $em->flush();

            return $this->redirectToRoute('survey_show', array('id' => $survey->getId()));
        }

        return $this->render('survey/new.html.twig', array(
            'survey' => $survey,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Survey entity.
     *
     */
    public function showAction(Survey $survey)
    {
        $deleteForm = $this->createDeleteForm($survey);

        return $this->render('survey/show.html.twig', array(
            'survey' => $survey,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Survey entity.
     *
     */
    public function editAction(Request $request, Survey $survey)
    {
        $deleteForm = $this->createDeleteForm($survey);
        $editForm = $this->createForm('SurveyBundle\Form\SurveyType', $survey);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($survey);
            $em->flush();

            return $this->redirectToRoute('survey_edit', array('id' => $survey->getId()));
        }

        return $this->render('survey/edit.html.twig', array(
            'survey' => $survey,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Survey entity.
     *
     */
    public function deleteAction(Request $request, Survey $survey)
    {
        $form = $this->createDeleteForm($survey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($survey);
            $em->flush();
        }

        return $this->redirectToRoute('survey_index');
    }

    /**
     * Creates a form to delete a Survey entity.
     *
     * @param Survey $survey The Survey entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Survey $survey)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('survey_delete', array('id' => $survey->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
