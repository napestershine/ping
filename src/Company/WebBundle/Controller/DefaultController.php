<?php

namespace Company\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CompanyWebBundle:Default:index.html.twig');
    }
}
