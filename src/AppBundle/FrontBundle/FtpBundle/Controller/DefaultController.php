<?php

namespace AppBundle\FrontBundle\FtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/front/ftp", name="ftp")
     */
    public function ftpAction() {
        $content = $this->renderView(
                'FtpBundle:Default:index.html.twig');

        return new Response($content);
    }
}
