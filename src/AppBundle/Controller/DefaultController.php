<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    /**
     * @Route("/index", name="index")
     * @Route("/")
     */
    public function indexAction() {
        $content = $this->renderView(
                'AppBundle:Default:index.html.twig');

        return new Response($content);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction() {
        $content = $this->renderView(
                'AppBundle:Default:about.html.twig');

        return new Response($content);
    }

}
