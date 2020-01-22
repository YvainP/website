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
    return $this->view->render($response, 'home.html.twig');
})->setName('home');

//Cv
$app->get('/myCV', function (Request $request, Response $response){
    return $this->view->render($response, 'cv.html.twig');
})->setName('cv');

//my projects
$app->get('/myProjects', function (Request $request, Response $response){
    return $this->view->render($response, 'projects.html.twig');
})->setName('projects');
//profile
$app->get('/myProfile', function (Request $request, Response $response){
    return $this->view->render($response, 'profile.html.twig');
})->setName('profile');

//contact
$app->get('/contact', function (Request $request, Response $response){
    return $this->view->render($response, 'contact.html.twig');
})->setName('contact');

//lancement de l'appli
$app->run();
