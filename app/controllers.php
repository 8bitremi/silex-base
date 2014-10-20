<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Silex\Provider\UrlGeneratorServiceProvider;
$app->register(new UrlGeneratorServiceProvider());




$app->match('/', function (Request $request) use ($app) {

	return $app['twig']->render('homepage.html.twig');

})->bind('homepage');




return $app;