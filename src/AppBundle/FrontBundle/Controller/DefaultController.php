<?php

namespace AppBundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    /**
     * @Route("/front", name="frontend")
     */
    public function homepageAction() {
        $content = $this->renderView(
                  'FrontBundle:Default:index.html.twig');

        return new Response($content);
    }

    

}
