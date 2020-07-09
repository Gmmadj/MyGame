<?php 

include 'Persons/Hero.php';
include 'Persons/Monstr.php';
include 'Models/Fight.php';

session_start();

$_SESSION['message'];

$hero = new Hero();
$monstr = new Monstr();

$fight = new Fight($hero, $monstr);


// Контроллер на коленке
if ($_GET['atack'] == true) {
	$fight->takingDamage();
}

if ($_GET['block'] == true) {
	
}

?>



<!-- 
И так, сначала выведем монстра и героя и их данные.
 -->