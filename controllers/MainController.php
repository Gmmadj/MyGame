<?php 

namespace controllers;

use core\testMyGame;
use core\View;

class MainController
{
	public function actionIndex($id, $name)
	{
		testMyGame::setTitle('Главная страница');

		echo $id;
		echo $name;

		testMyGame::goView();
	}

	public function actionTest()
	{
		View::a();
	}
}