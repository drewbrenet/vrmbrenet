<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';
$app = new Silex\Application();
use BookingApp\Application;
$app = new Application();

$app->run();
?>