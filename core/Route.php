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

	static private $params;

	/**
	 *	Запуск маршрутизатора. Гланая функция.
	 */
	static public function run()
	{
		self::dividesRoute(self::getRoute());
		self::connect();
	}

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
		else {
			self::setParams([$route[2], $route[3]]);
		}
	}

	public function connect()
	{
		self::setPathController();
		self::setPathAction();
		
		if (self::checkRoute()) {
			$controller = new self::$pathController;
			$controller->{self::$pathAction}(...self::$params);
		}
	}

	public function checkRoute()
	{
		if (method_exists(self::$pathController, self::$pathAction)) {
			return true;
		}
		else {
			die('Ошибка в проверке пути.<br><hr> Не найдено действие <b>'. self::$pathAction .'</b><Br> В контроллере <b>'. self::$pathController .'</b>');
		}
	}

	/**
	 *	Получаю маршрут, как название переменной: main/index
	 */
	public function getRoute()
	{
		return key($_GET);
	}

	/**
	 * Установка пути контроллера controllers\MainController
	 */
	public function setPathController()
	{
		self::$pathController = 'controllers\\'. ucfirst(self::$controller) .'Controller';
	}

	/**
	 *	Установка пути действия actionIndex
	 */
	public function setPathAction()
	{
		self::$pathAction = 'action'. self::$action;
	}

	/**
	 * Установка контроллера
	 */
	public function setController($controller)
	{
		self::$controller = $controller;
	}

	/**
	 *	Установка действия
	 */
	public function setAction($action)
	{
		self::$action = $action;
	}

	public function setParams($params)
	{
		self::$params = $params;
	}
}