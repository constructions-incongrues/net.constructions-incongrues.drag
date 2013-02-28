<?php
require_once __DIR__.'/../../vendor/autoload.php';

// Configure application
$app = new Silex\Application();
$app['debug'] = true;

$app->run();