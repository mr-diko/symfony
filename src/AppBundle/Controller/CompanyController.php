<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Company;
use AppBundle\Form\CompanyType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    /**
     * @Route("/companies")
     *
     * @return Response
     */
    public function indexAction()
    {
        $companies = $this->getDoctrine()->getRepository('AppBundle:Company')->findAll();

        return $this->render('company/index.html.twig', ['companies' => $companies]);
    }

    /**
     * @Route("/companies/create")
     *
     * @param Request $request
     *
     * @return RedirectResponse|Response
     */
    public function createAction(Request $request)
    {
        $company = new Company();

        $form = $this->createForm('AppBundle\Form\CompanyType', $company);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($company);
            $em->flush();

            return $this->redirectToRoute('app_company_index');
        }

        return $this->render('company/create.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/companies/edit/{id}")
     *
     * @param int $id
     *
     * @return RedirectResponse|Response
     */
    public function editAction($id)
    {
    }

    /**
     * @Route("/companies/delete/{id}")
     *
     * @param Request $request
     */
    public function deleteAction(Request $request)
    {

    }
}
