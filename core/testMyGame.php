<?php 

namespace core;

use core\Route;
use core\View;

class testMyGame
{
	static public $config;
	static public $nameTitle;
	static public $nameView;

	public function __construct($config)
	{
		self::$config = $config;

		Route::run();
	}

	static public function goView($nameView = 'index')
	{
		self::$nameView = $nameView;
		$view = new View;
		$view->displayView();
	}

	static public function setTitle($nameTitle)
	{
		self::$nameTitle = $nameTitle;
	}

	static public function getTitle()
	{
		return self::$nameTitle;
	}
}
