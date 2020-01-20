<?php
namespace website\controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

//Class regroupant des classes utiles et globales
class Useful {

    //redirige vers sune page spécifiée
    public static function redirect(ResponseInterface $response, $route, $args = [])
    {
        global $app;
        return $response->withRedirect($app->getContainer()->get('router')->pathFor($route, $args));
    }
}
