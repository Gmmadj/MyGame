<?php 

namespace controllers;

use core\testMyGame;

class MainController
{
	public function actionIndex()
	{
		testMyGame::goView();
	}
}