<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $customers = $em->getRepository('AppBundle:Customer')->findAll();
        return $this->render(
            'default/index.html.twig', array(
                'customers' => $customers
            )
        );
    }
}
