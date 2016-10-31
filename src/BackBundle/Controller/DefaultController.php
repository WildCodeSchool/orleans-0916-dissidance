<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{


    /**
     * @Route("/adm", name="index_adm")
     */
    public function indexAction()
    {
        return $this->render('BackBundle:Default:index.html.twig');
    }
}
