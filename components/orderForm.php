<h1>Order Form</h1>
<form action="" method="post">

	<label for="fname">First Name</label>
	<input id="fname" type="text" name="fname" placeholder="John" required>

	<label for="lname">Last Name</label>
	<input id="lname" type="text" name="lname" placeholder="Doe" required>

	<label for="email">Email</label>
	<input id="email" type="text" name="email" placeholder="Doe" required>

    <label for="game">Game</label>
    <select name="game" id="game">
        <?php foreach($games as $game): ?>
			<option value="<?= $game[0] ?>"><?= $game[1] ?></option>
        <?php endforeach ?>
    </select>
    <label for="quantity">Quantity</label>
    <select name="qty" id="quantity">
		<?php for($i = 1; $i <= 20; $i++): ?>
			<option value="<?= $i ?>"><?= $i ?></option>
		<?php endfor ?>
    </select>

	<button>Submit</button>
</form>