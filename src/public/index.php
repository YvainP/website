<?php

require_once('../../vendor/autoload.php');

//controllers
use website\controller\ControllerSite;
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$settings = require_once "../config/settings.php";
$container = new \Slim\Container($settings);
$app = new \Slim\App($container);

//Routes
//Accueil
$app->get('/', function (Request $request, Response $response){
    return $this->view->render($response, 'base.html.twig');
});

//lancement de l'appli
$app->run();
