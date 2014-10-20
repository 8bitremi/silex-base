<?php

use Silex\Provider\MonologServiceProvider;

$app['debug'] = true;

// enable monolog
$app->register(new MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__ . '/../var/logs/silex_prod.log',
));

// sessions configs
$app['session.storage.save_path'] = __DIR__ . '/../var/sessions';

// twig configs
$app['twig.path'] = array(__DIR__.'/../views');
