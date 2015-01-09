<?php

namespace Tamago\FeedRenderBundle\Tests\Controller;

use Symfony\Component\DependencyInjection\Container;

use Tamago\FeedRenderBundle\Controller\FeedRenderController;

class FeedRenderControllerTest extends \PHPUnit_Framework_TestCase
{
    public function testIndex()
    {
        $container = new Container();
        $container->setParameter('tamago_feed_render.url', 'http://www.npr.org/rss/rss.php');
        $container->setParameter('tamago_feed_render.max_per_page', 10);

        $controller = new FeedRenderController();
        $controller->setContainer($container);
    }
}
