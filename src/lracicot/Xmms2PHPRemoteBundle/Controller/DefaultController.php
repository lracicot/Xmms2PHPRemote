<?php

namespace lracicot\Xmms2PHPRemoteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('lracicotXmms2PHPRemoteBundle:Default:index.html.twig', array('name' => $name));
    }
}
