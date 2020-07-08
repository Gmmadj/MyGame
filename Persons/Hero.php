<?php 

class Hero
{
	public $hp;
	public $atack;
	public $block;

	public function __construct($hp = 100, $atack = 5, $block = 10) 
	{
		$this->hp = $hp;
		$this->atack = $atack;
		$this->block = $block;
	}
}