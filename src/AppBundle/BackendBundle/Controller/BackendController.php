<?php

namespace AppBundle\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class BackendController extends Controller {

    /**
     * @Route("/", name="backend")
     */
    public function homepageAction() {
        $content = $this->renderView(
                'BackendBundle:Default:index.html.twig');

        return new Response($content);
    }

}
