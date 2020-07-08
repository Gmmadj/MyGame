<?php 

include 'Persons/Hero.php';
include 'Persons/Monstr.php';

$hero = new Hero();
$monstr = new Monstr();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>Бой</title>
</head>
<body>
	<table class="main">
		<tr>
			<th class="item">
			</th>
			<th class="item">
				<img src="monstr.png" alt="">
			</th>
			<th class="item">
				
			</th>
		</tr>
		<tr>
			<th class="item">
				<a href="?atack=7"><img src="atack.png" alt=""></a>
			</th>
			<th class="item">
				<a href="?block=10"><img src="block.png" alt=""></a>
			</th>
			<th class="item">
				<p></p>
				<p></p>
				<p></p>
			</th>
		</tr>
	</table>
	
</body>
</html>

<!-- 
И так, сначала выведем монстра и героя и их данные.
 -->