<?php 

namespace core;

use core\Route;

class testMyGame
{
	static public $config;
	static private $nameTitle;

	public function __construct($config)
	{
		self::$config = $config;

		Route::run();
	}

	static public function goView($nameView = 'index')
	{
		ob_start();
		testMyGame::setTitle('Главная страница');
		require_once('views\\'. $nameView .'.php');
		ob_end_flush();
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
