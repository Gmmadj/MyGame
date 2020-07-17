<?php 

spl_autoload_register(function($class) {
	$route = $class .'.php';

	if (file_exists($route)) {
		require_once $route;
	}
	else {
		die('<h1>Ошибка Autoload. Файл '. $route .' не был найден</h1>');
	}
});