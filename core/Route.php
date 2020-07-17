<?php 

namespace core;

use core\testMyGame;

class Route extends testMyGame
{
	static public $route = array();

	public function fillRoute($route)
	{
		$route = explode("/", trim($route));

		if (!$route[0]) {
			$route[0] = self::$config['defaultController'];
		}
		if (!$route[1]) {
			$route[1] = 'index';
		}
		if (!$route[2]) {
			$route[2] = '';
		}

		self::$route = $route;
	}

	public function connect()
	{
		$pathController = 'controllers\\'. ucfirst(self::$route[0]) .'Controller';
		$action = 'action'. self::$route[1];

		self::check($pathController, $action);

		$controller = new $pathController;
		$controller->$action();
	}

	public function check($controller, $action)
	{
		if (method_exists($controller, $action)) {
			return true;
		}
		else {
			die('<h1>Ошибка 404. Путь не найден.<h2>');
		}
	}

	static public function run()
	{
		self::fillRoute(key($_GET));
		self::connect();
	}
}