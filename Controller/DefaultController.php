<?php

namespace Tamago\FeedRenderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TamagoFeedRenderBundle:Default:index.html.twig', array('name' => $name));
    }
}
