<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller {

    /**
     * @Route("/login", name="login_route")
     */
    public function loginAction(Request $request) {
        $authenticationUtils = $this->get('security.authentication_utils');

// get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

// last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render(
                        'security/login.html.twig', array(
// last username entered by the user
                    'last_username' => $lastUsername,
                    'error' => $error,
                        )
        );
    }

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction() {
        // this controller will not be executed,
        // as the route is handled by the Security system
    }

    /**
     * @Route("/login_role_checker", name="login_role_checker")
     */
    public function loginRoleCheckAction(Request $request) {
        // this controller will not be executed,
        // as the route is handled by the Security system
        if (in_array("ROLE_SUPER_ADMIN", $this->getUser()->getRoles())) {
            return $this->redirect($this->generateUrl('backend'), 301);
        } elseif (in_array("ROLE_ADMIN", $this->getUser()->getRoles())) {
            return $this->redirect($this->generateUrl('frontend'), 301);
        }
    }

    public function getTokenAction() {
        return new Response($this->container->get('form.csrf_provider')
                        ->generateCsrfToken('authenticate'));
    }

}
