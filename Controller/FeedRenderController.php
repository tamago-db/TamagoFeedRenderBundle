<?php

namespace Tamago\FeedRenderBundle\Controller;

use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FeedRenderController extends Controller
{
    public function indexAction($page = 1)
    {
        $rss = new \DOMDocument();
        $rss->load($this->container->getParameter('tamago_feed_render.url'));
        $feed = array();
        foreach ($rss->getElementsByTagName('item') as $node) {
            $item = array (
                'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
                'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
                'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
                'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
            );
            array_push($feed, $item);
        }

        $adapter = new ArrayAdapter($feed);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setCurrentPage($page);
        $pagerfanta->setMaxPerPage($this->container->getParameter('tamago_feed_render.max_per_page'));

        return $this->render('TamagoFeedRenderBundle:Pages:index.html.twig', array('pagerfanta'=>$pagerfanta,));
    }
}
