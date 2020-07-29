<?php 

namespace core;

use core\testMyGame;

class Route
{
	static public $route = array();

	static private $controller;
	static private $pathController;

	static private $action;
	static private $pathAction;

	/**
	 * Заполняет маршрут
	 */
	public function dividesRoute($route)
	{
		$route = explode("/", trim($route));

		if (!$route[0]) {
			self::setController(testMyGame::$config['defaultController']);
		}
		else {
			self::setController($route[0]);
		}

		if (!$route[1]) {
			$action = testMyGame::$config['defaultAction'];
			self::setAction($action);
		}
		else {
			self::setAction($route[1]);
		}

		if (!$route[2]) {
			$route[2] = '';
		}
	}

	public function connect()
	{
		self::setPathController();
		self::setPathAction();
		
		if (self::checkRoute()) {
			$controller = new self::$pathController;
			$controller->{self::$pathAction}();
		}
	}

	public function checkRoute()
	{
		if (method_exists(self::$pathController, self::$pathAction)) {
			return true;
		}
		else {
			return false;
		}
	}

	static public function run()
	{
		self::dividesRoute(self::getRoute());
		self::connect();
	}

	public function getRoute()
	{
		return key($_GET);
	}

	public function setPathController()
	{
		self::$pathController = 'controllers\\'. ucfirst(self::$controller) .'Controller';
	}

	public function setPathAction()
	{
		self::$pathAction = 'action'. self::$action;
	}

	public function setController($controller)
	{
		self::$controller = $controller;
	}

	public function setAction($action)
	{
		self::$action = $action;
	}

	public function getAciton()
	{
		return self::$action;
	}
}