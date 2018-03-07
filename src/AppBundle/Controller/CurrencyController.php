<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CurrencyController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Currency:index.html.twig', array(
            // ...
        ));
    }

    public function deleteAction()
    {
        return $this->render('AppBundle:Currency:delete.html.twig', array(
            // ...
        ));
    }

    public function editAction()
    {
        return $this->render('AppBundle:Currency:edit.html.twig', array(
            // ...
        ));
    }

    public function viewAction()
    {
        return $this->render('AppBundle:Currency:view.html.twig', array(
            // ...
        ));
    }

    public function addAction()
    {
        return $this->render('AppBundle:Currency:add.html.twig', array(
            // ...
        ));
    }

    public function reportAction()
    {
        return $this->render('AppBundle:Currency:report.html.twig', array(
            // ...
        ));
    }

}
