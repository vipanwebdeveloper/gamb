<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/**
 * Currency controller.
 *
 * @Route("admin")
 */

class AdminController extends Controller
{
    /**
     * @Route("/", name="admin_dashboard")
     */
    public function indexAction()
    {
        return $this->render('@App/Admin/index.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/logout")
     */
    public function logoutAction()
    {
        return $this->render('AppBundle:Admin:logout.html.twig', array(
            // ...
        ));
    }

}
