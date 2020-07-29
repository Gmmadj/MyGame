<?php 

namespace core;

use core\testMyGame;

class View
{
	public function displayView()
	{
		$nameView = testMyGame::$nameView;

		require_once('views\\'. $nameView .'.php');
	}

	public function getTitle()
	{
		return testMyGame::$nameTitle;
	}
}
