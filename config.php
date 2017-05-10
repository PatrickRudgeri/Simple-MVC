<?php
require 'environment.php';

define("BASE_URL", "http://projetox.pc/mvc-padrao");


global $config;

$config = array();

if (ENVIRONMENT == 'development') {
	$config['dbname'] = 'curso_php';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123';
} else {
	$config['dbname'] = 'curso_php';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123';
}
