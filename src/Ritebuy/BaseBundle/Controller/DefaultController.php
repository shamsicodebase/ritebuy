<?php

namespace Ritebuy\BaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RitebuyBaseBundle:Default:index.html.twig');
    }
}
