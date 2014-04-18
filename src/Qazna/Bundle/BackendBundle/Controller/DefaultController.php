<?php

namespace Qazna\Bundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    /**
     * @Route("/backend", name="backend")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('QaznaBackendBundle:Default:index.html.twig', array('name'=>"Backend"));
    }
}
