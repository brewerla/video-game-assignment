<?php
	include './components/functions.php';
	$games = read_file('./data/games.csv');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">
	<title>Gametopia</title>
</head>
<body>
    <div class="main-container">
		<div class="heading-section">
			<div class="content">
				<h1>Welcome to Gametopia!</h1>
				<p>Home to games o' plenty</p>
			</div>
		</div>

		<div class="wave wave-up"></div>
		<div class="games-list">
			<h1>Browse Our Games</h1>
			<div class="items-container">
                <?php foreach($games as $game): ?>
					<div class="items-container-item">
						<div class="game-img" style="background-image: url('./imgs/<?= $game[4] ?>')"></div>
						<p class="title"><?= $game[1] ?></p>
						<p><?= $game[2] ?></p>
						<p>Price: <?= $game[3] ?></p>
					</div>
                <?php endforeach; ?>
			</div>

		</div>
		<div class="wave wave-down"></div>

		<div class="form-container">
			<?php include './components/orderForm.php' ?>
		</div>

		<div class="wave layered-up"></div>
		<div class="orders-container">
			<?php include './components/ordered.php' ?>
		</div>

    </div>
</body>
</html>