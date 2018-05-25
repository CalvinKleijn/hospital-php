<?php
    foreach ($getUsers as $getUser) {
?>

<form method="POST" action="../editSave/<?php echo $getUser['species_id'] ?>">
	<h1>Specie beschrijving:</h1>
	<input type="text" name="beschrijving" value="<?php echo $getUser['species_description'] ?>">
	<br><br>
	<input type="submit">
</form>

<?php
    }
?>