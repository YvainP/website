<?php

namespace website\controller;

class ControllerSite extends Controller {

	public function showAccueil(Request $request, Response $response){
		return $this->view->render($response, 'base.html.twig');
	}
}

