<?php

class Controller
{
	protected $templateName;
	protected $viewName;
	protected $viewData;

	public function loadTemplate($templateName, $viewName, $viewData = array())
	{

		$this->templateName = $templateName;
		$this->viewName = $viewName;
		$this->viewData = $viewData;
		extract($this->viewData);
		include 'views/' . $templateName . '.php';

	}

	public function loadViewInTemplate($viewName, $viewData = array())
	{

		extract($this->viewData);
		include 'views/' . $viewName . '.php';

	}

}