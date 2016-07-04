<?php

namespace Mayssoun\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/user/")
     */
    public function indexAction()
    {
        return $this->render('MayssounUserBundle:Security:layout.html.twig');
    }
}
