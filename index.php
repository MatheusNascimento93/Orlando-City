<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();



// GET route
$app->get(
    '/',
    function () {
       require_once("views/index.php");
    }
);
$app->get(
    '/videos',
    function () {
       require_once("views/videos.php");
    }
);


$app->run();
