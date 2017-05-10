<?php
session_start();
require __DIR__ . 'config.php';

spl_autoload_register(function ($class) {


	if (strpos($class, 'Controller') > -1) {
		if (file_exists('controllers/' . $class . '.php')) {
			echo 'linha:32 > Controller carregado: ' . $class . '<hr>';                  //TODO trace dump
			require_once 'controllers/' . $class . '.php';

		}

	} else if (file_exists('models/' . $class . '.php')) {
		echo 'linha:40 > Model carregado: ' . $class . '<hr>';                          //TODO trace dump
		require_once 'models/' . $class . '.php';

	} else {
		echo 'linha:44 > Core carregado: ' . $class . '<hr>';                           //TODO trace dump
		require_once 'core/' . $class . '.php';

	}
});

$core = new Core();
$core->run();



















