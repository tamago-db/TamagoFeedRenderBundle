#TamagoFeedRenderBundle
Simple bundle to render RSS news feeds within an app

[![Build Status](https://travis-ci.org/tamago-db/TamagoFeedRenderBundle.svg?branch=master)](https://travis-ci.org/tamago-db/TamagoFeedRenderBundle)

## Installation

Add the package to your composer.json file

```
"tamago/feed-render-bundle": "dev-master",
```
##Configuration

Edit config.yml

```
parameters:
    tamago_feed_render.url: 'http://rss.indeed.com/rss?q=RSS'
    tamago_feed_render.MaxPerPage: 10
```

## License

This bundle is under the MIT license.
