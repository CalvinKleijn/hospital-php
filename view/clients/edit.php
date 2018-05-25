<?php
    foreach ($getUsers as $getUser) {
?>

<form method="POST" action="../editSave/<?php echo $getUser['client_id'] ?>">
	<h1>Voornaam:</h1>
	<input type="text" name="voornaam" value="<?php echo $getUser['client_firstname'] ?>">
	<h1>Achternaam:</h1>
	<input type="text" name="achternaam" value="<?php echo $getUser['client_lastname'] ?>">
	<br><br>
	<input type="submit">
</form>

<?php
    }
?>