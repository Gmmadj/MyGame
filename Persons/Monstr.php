<?php 

class Monstr
{
	public $name = 'Monstr';
	public $hp;
	public $atack;
	public $block;
	public $move;

	public function __construct($hp = 100, $atack = 2, $block = 1, $move = 3) 
	{
		$this->hp = $hp;
		$this->atack = $atack;
		$this->block = $block;
		$this->move = $move;
	}
}