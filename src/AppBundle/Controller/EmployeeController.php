<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EmployeeController extends Controller
{
    /**
     * @Route("/employees")
     */
    public function indexAction()
    {
        $employees = $this->getDoctrine()->getRepository('AppBundle:Employee')->findAll();

        return $this->render('employee/index.html.twig', ['employees' => $employees]);
    }

    /**
     * @Route("/employees/create")
     *
     * @param Request $request
     */
    public function createAction(Request $request)
    {

    }

    /**
     * @Route("/employees/edit/{id}")
     *
     * @param Request $request
     */
    public function editAction(Request $request)
    {

    }

    /**
     * @Route("/employees/delete/{id}")
     *
     * @param Request $request
     */
    public function deleteAction(Request $request)
    {

    }
}
