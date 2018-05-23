<form action="<?= URL ?>patient/createSave" method="POST">
		<h3>Naam</h3>
		<input type="text" name="naam">
		<h3>Specie</h3>
		<select type="text" name="specie" required>
            <?php
                foreach($species as $specie)
                {
                    echo "<option value=" . $specie['species_id'] .">" . $specie['species_description'] ."</option>";
                }
            ?>
        </select>
		<h3>Status</h3>
		<input type="text" name="status">
		<h3>Client</h3>
		<select type="text" name="client" required>
            <?php
                foreach($clients as $client)
                {
                    echo "<option value=" . $client['client_id'] .">" . $client['client_firstname'] . " " . $client['client_lastname'] ."</option>";
                }
            ?>
        </select>
        <br><br>
		<input type="submit">
	</form>