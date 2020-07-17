<?php 

namespace core;

final class Route
{
	static public $route = array();

	public function fillRoute($route)
	{
		self::$route = explode("/", trim($route));
	}

	public function connect()
	{
		$pathController = 'controllers\\'. ucfirst(self::$route[0]) .'Controller';
		$action = 'action'. self::$route[1];

		$controller = new $pathController;
		$controller->$action();
	}

	static public function run()
	{
		self::fillRoute(key($_GET));
		self::connect();
	}
}