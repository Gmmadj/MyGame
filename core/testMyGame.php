<?php 

namespace core;

use core\Route;

class testMyGame
{
	static public $config;

	public function __construct($config)
	{
		self::$config = $config;

		Route::run();
	}
}
