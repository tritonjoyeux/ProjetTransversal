<?php

namespace Cook4usBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('Cook4usBundle:Home:index.html.twig');
    }
}
