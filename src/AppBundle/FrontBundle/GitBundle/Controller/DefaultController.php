<?php

namespace AppBundle\FrontBundle\GitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    /**
     * @Route("/front/git", name="git")
     */
    public function gitAction() {
        $content = $this->renderView(
                'GitBundle:Default:index.html.twig');

        return new Response($content);
    }

}
