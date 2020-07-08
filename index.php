<?php 

include 'Persons/Hero.php';
include 'Persons/Monstr.php';
include 'Models/Fight.php';

session_start();

$_SESSION['message'];
$_SESSION['move'] = 0;

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

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Бой</title>
</head>
<body>
	<?php if ($_GET['start'] == true || $_SESSION['start'] == true): ?>
		<?php $_SESSION['start'] = true ?>
		<table class="main">
			<tr>
				<th class="item">
				</th>
				<th class="item">
					<img src="monstr.png" alt="">
				</th>
				<th class="item">
					<p>Жизней: <?= $monstr->hp - $_SESSION['sumDM'] ?></p>
					<p>Урон: <?= $monstr->atack ?></p>
					<p>Защита: <?= $monstr->block ?></p>
					<p>Атакует через: <?= $monstr->move ?></p>
				</th>
			</tr>
			<tr>
				<th class="item">
					<a href="?atack=true"><img src="atack.png" alt=""></a>
				</th>
				<th class="item">
					<a href="?block=true"><img src="block.png" alt=""></a>
				</th>
				<th class="item">
					<p>Жизней: <?= $hero->hp ?></p>
					<p>Урон: <?= $hero->atack ?></p>
					<p>Защита: <?= $hero->block ?></p>
				</th>
			</tr>
		</table>
	<?php else: ?>
		<h1><?= $_SESSION['message'] ?></h1>
		<a href="?start=true"><button class="wow-btn">Начать бой</button></a>	
	<?php endif ?>
</body>
</html>

<!-- 
И так, сначала выведем монстра и героя и их данные.
 -->