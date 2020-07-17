<?php 

namespace controllers;

class MainController
{
	public function actionIndex()
	{
		require_once "views/fight.php";

		print_r($_SERVER['SCRIPT_NAME']);
	}
}