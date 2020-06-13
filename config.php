<?php
require 'environment.php';

define("BASE_URL", "https://simple-php-mvc.herokuapp.com");


global $config;

$config = array();

if (ENVIRONMENT == 'development') {
	$config['dbname'] = 'curso_php';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123';
} else {
	$config['dbname'] = 'd3cbc4gffso5pm';
	$config['host'] = 'ec2-34-204-22-76.compute-1.amazonaws.com:5432';
	$config['dbuser'] = 'dvdrdxnegedove';
	$config['dbpass'] = '5d279492c468e3e9644c3e21fd700ecf1b1c94c2c369ea9973fba23377b1565e';
}
