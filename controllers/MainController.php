<?php 

namespace controllers;

use core\testMyGame;
use core\View;

class MainController
{
	public function actionIndex()
	{
		testMyGame::setTitle('Главная страница');
		testMyGame::goView();
	}

	public function actionTest()
	{
		View::a();
	}
}