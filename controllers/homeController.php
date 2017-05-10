<?php

class homeController extends Controller
{
	public function index()
	{

		$usuario = new Usuario();

		$viewData = $usuario->getUsuarios();

		$this->loadTemplate('mainTemplate', 'home', $viewData = array());

	}

}