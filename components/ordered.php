<?php
	if(count($_POST)) append_file($_POST, './data/orders.csv');
    $read = read_file('./data/orders.csv');
?>

<?php if(!count($read)) return ?>
<div class="orders">
	<h1>Orders</h1>
	<div id="order-example" class="orders-item">
		<div>
			<p>First Name</p>
		</div>
		<div>
			<p>Last Name</p>
		</div>
		<div>
			<p>Email</p>
		</div>
		<div>
			<p>Game ID</p>
		</div>
		<div>
			<p>Game Quantity</p>
		</div>
	</div>
	<?php foreach($read as $item): ?>
		<div class="orders-item">
			<?php foreach($item as $single): ?>
				<div>
					<p><?= $single ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endforeach; ?>


</div>
