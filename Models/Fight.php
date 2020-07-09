<?php 

class Fight
{
	public $move = false;
	public $hero;
	public $monstr;

	public function __construct($hero, $monstr)
	{
		$this->run($hero, $monstr);
	}

	public function run($hero, $monstr)
	{
		$this->hero = $hero;
		$this->monstr = $monstr;

		if ( $this->move > 0 and $this->move % 3 == 0 ) {
			$this->dealingDamage();
		}
	}

	public function takingDamage()
	{
		$_SESSION['sumDM'] += $this->hero->atack;
		$_SESSION['move'] += 1; 
		$this->die();
	}

	public function dealingDamage()
	{
		$_SESSION['sumDH'] += $this->monstr->atack;
		$this->die();
	}

	public function nextMove()
	{

	}

	public function defendOneself()
	{

	}

	public function proofCheck()
	{

	}

	public function die()
	{
		if ($_SESSION['sumDM'] >= $this->monstr->hp) {
			$_SESSION['start'] = false;
			$_SESSION['message'] = 'Вы победили';
			$_SESSION['sumDM'] = 0;
			$_SESSION['sumDH'] = 0;
		}
		if ($_SESSION['sumDH'] >= $this->hero->hp) {
			$_SESSION['start'] = false;
			$_SESSION['message'] = 'Вы проиграли';
			$_SESSION['sumDM'] = 0;
			$_SESSION['sumDH'] = 0;
		}
	}
}