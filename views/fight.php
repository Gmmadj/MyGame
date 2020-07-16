<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Бой</title>
</head>
<body>
		<?php 
		$_SESSION['start'] = true;

		?>
		<h1>Ход №<?= $_SESSION['move'] ?></h1>
		<table class="main">
			<tr>
				<th class="item">
				</th>
				<th class="item">
					<img src="images/monstr.png" alt="">
				</th>
				<th class="item">
					<p>Жизней: <?= $monstr->hp - $_SESSION['sumDM'] ?></p>
					<p>Урон: <?= $monstr->atack ?></p>
					<p>Защита: <?= $monstr->block ?></p>
					<p>Атакует через: <?= $monstr->move / $_SESSION['move'] ?></p>
				</th>
			</tr>
			<tr>
				<th class="item">
					<a href="?atack=true"><img src="images/atack.png" alt=""></a>
				</th>
				<th class="item">
					<a href="?block=true"><img src="images/block.png" alt=""></a>
				</th>
				<th class="item">
					<p>Жизней: <?= $hero->hp - $_SESSION['sumDH']?></p>
					<p>Урон: <?= $hero->atack ?></p>
					<p>Защита: <?= $hero->block ?></p>
				</th>
			</tr>
		</table>

</body>
</html>