TamagoFeedRenderBundle
======================

Simple bundle to render RSS news feeds within an app

[![Build Status](https://travis-ci.org/tamago-db/TamagoFeedRenderBundle.svg?branch=master)](https://travis-ci.org/tamago-db/TamagoFeedRenderBundle)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/04031f51-7a0d-405d-996d-1d093f6e23e1/mini.png)](https://insight.sensiolabs.com/projects/04031f51-7a0d-405d-996d-1d093f6e23e1)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/tamago-db/TamagoFeedRenderBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/tamago-db/TamagoFeedRenderBundle/?branch=master)

Installation
------------

Add the package to your composer.json file

```
"tamago/feed-render-bundle": "dev-master",
```

### Register the bundle in your kernel

``` php
public function registerBundles()
{
    $bundles = array(
        // ...
        new Tamago\FeedRenderBundle\TamagoFeedRenderBundleBundle(),
        // ...
    );
```

### Configuration

```
parameters:
    tamago_feed_render.url: 'http://rss.indeed.com/rss?q=RSS'
    tamago_feed_render.max_per_page: 10
```

## License

This bundle is under the MIT license.
