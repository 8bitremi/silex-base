<?php

use Silex\Application;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\SessionServiceProvider;

$app = new Silex\Application();

$app->register(new ServiceControllerServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new UrlGeneratorServiceProvider());
$app->register(new SessionServiceProvider());


return $app;
