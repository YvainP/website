<?php
namespace website\controller;

use Slim\Http\Request;
use Slim\Http\Response;

abstract class Controller {
	protected $view;
	
	public function __construct(\Slim\Container $container){
		$this->view = $container->view;
	}
	
	protected function render($response, $template, $args = []) {
        return $this->view->render($response, $template, $args);
    }
}