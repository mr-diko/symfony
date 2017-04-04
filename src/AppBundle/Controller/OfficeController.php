<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OfficeController extends Controller
{
    /**
     * @Route("/offices")
     */
    public function indexAction()
    {
        $offices = $this->getDoctrine()->getRepository('AppBundle:Office')->findAll();

        return $this->render('office/index.html.twig', ['offices' => $offices]);
    }

    /**
     * @Route("/offices/create")
     *
     * @param Request $request
     */
    public function createAction(Request $request)
    {

    }

    /**
     * @Route("/offices/edit/{id}")
     *
     * @param Request $request
     */
    public function editAction(Request $request)
    {

    }

    /**
     * @Route("/offices/delete/{id}")
     *
     * @param Request $request
     */
    public function deleteAction(Request $request)
    {

    }
}
