<?php

namespace PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PostBundle:Default:index.html.twig');
    }

    public function listAction($id, $slug)
    {
    	echo "$id, $slug";
    	die('fin');
    }
}
