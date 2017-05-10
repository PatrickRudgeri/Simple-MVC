<?php

class Core
{
	public function run()
	{

		//TODO adicionar funcao para pegar varios parametros:
		// function http_build_query ($query_data, $numeric_prefix = null, $arg_separator = null, $enc_type = PHP_QUERY_RFC1738);
		/**
		 * @link http://php.net/manual/en/function.http-build-query.php
		 */
		$url = '/' . ((isset($_GET['param'])) ? $_GET['param'] : '');
		$params = array();

		if (!empty($url) && $url != '/') {

			$url = explode('/', $url);
			array_shift($url);

			$currentController = $url[0] . 'Controller';
			array_shift($url);

			if (isset($url[0])) {
				$currentAction = $url[0];
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			if (count($url) > 0) {
				$params = $url;
			}

		}
		if (empty($url) || $url == '/') {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		require_once __DIR__ . 'core/Controller.php';

		$instanceController = new $currentController();

		$arrayControllerAndAction = array($instanceController, $currentAction);

		call_user_func_array($arrayControllerAndAction, $params);
	}

}
