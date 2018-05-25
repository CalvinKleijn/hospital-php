<form action="<?= URL ?>patient/createSave" method="POST">
		<h1>Naam</h1>
		<input type="text" name="naam">
		<h1>Specie</h1>
		<select type="text" name="specie" required>
            <?php
                foreach($species as $specie)
                {
                    echo "<option value=" . $specie['species_id'] .">" . $specie['species_description'] ."</option>";
                }
            ?>
        </select>
		<h1>Status</h1>
		<input type="text" name="status">
		<h1>Client</h1>
		<select type="text" name="client" required>
            <?php
                foreach($clients as $client)
                {
                    echo "<option value=" . $client['client_id'] .">" . $client['client_firstname'] . " " . $client['client_lastname'] ."</option>";
                }
            ?>
        </select>
        <h1>Gender:</h1>
        <input type="radio" name="gender" value="male">Man
        <input type="radio" name="gender" value="female">Vrouw<br><br>
        <br><br>
		<input type="submit">
</form>