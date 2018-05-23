<h2>Species</h2>
 
<div class="container">
	<table border="1">
		<tr>
			<th>#</th>
			<th>Diersoort</th>
			<th colspan="2">Action</th>
		</tr>
		
		<?php foreach ($species as $specie) { ?>
		<tr>
			<td><?= $specie['species_id']; ?></td>
			<td><?= $specie['species_description']; ?></td>
			<td><a href="<?= URL ?>specie/edit/<?= $specie['species_id'] ?>">Edit</a></td>
			<td><a href="<?= URL ?>specie/delete/<?= $specie['species_id'] ?>">Delete</a></td>
		</tr>
		<?php } ?>

	</table>
	<br>
	<a href="<?= URL ?>specie/create">Toevoegen</a>
</div>