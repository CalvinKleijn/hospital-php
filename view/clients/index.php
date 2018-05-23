<h2>Clients</h2>
 
<div class="container">
	<table border="1">
		<tr>
			<th>Voornaam</th>
			<th>Achternaam</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($clients as $client) { ?>
		<tr>
			<td><?= $client['client_firstname']; ?></td>
			<td><?= $client['client_lastname']; ?></td>
			<td><a href="<?= URL ?>client/edit/<?= $client['client_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>client/delete/<?= $client['client_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<br>
	<a href="<?= URL ?>client/create">Toevoegen</a>
</div>