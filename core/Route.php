<?php 

namespace core;

class Route
{
	public function __construct()
	{
		$this->run();
	}

	public function run()
	{
		var_dump($_GET);
	}
}