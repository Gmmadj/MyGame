<?php 

namespace controllers;

class MainController
{
	public function actionName()
	{
		require_once "views/fight.php";

		print_r($_SERVER['SCRIPT_NAME']);
	}
}