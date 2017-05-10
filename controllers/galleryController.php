<?php

class galleryController extends Controller
{
	public function index($nome, $sobrenome = '')
	{

		$viewData = [
			'nome'      => $nome,
			'sobrenome' => $sobrenome
		];

		$this->loadTemplate('mainTemplate', 'gallery', $viewData);
	}
}