<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//controllers
use website\controller\ControllerSite;


require_once('../../vendor/autoload.php');

$settings = require_once "../config/settings.php";
$container = new \Slim\Container($settings);
$app = new \Slim\App($container);

//Routes
//Accueil
$app->get('/', ControllerSite::class.':showAccueil')->setName('home');

//lancement de l'appli
$app->run();
