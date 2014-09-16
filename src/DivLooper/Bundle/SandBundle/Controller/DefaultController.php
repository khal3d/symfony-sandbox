<?php

namespace DivLooper\Bundle\SandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route,
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", methods={"GET"}, name="homepage")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
