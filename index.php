<?php

ini_set('display_errors', 0);

$loader = require_once __DIR__.'/vendor/autoload.php';

$app = require __DIR__.'/app/bootstrap.php';

$app->run();
