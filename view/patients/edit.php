<?php
    foreach ($getUsers as $getUser) {
?>

<form method="POST" action="../editSave/<?php echo $getUser['patient_id'] ?>">
		<h1>Naam</h1>
		<input type="text" name="naam" value="<?php echo $getUser['patient_name'] ?>">
		<h1>Specie</h1>
		<select type="text" name="specie" required>
            <?php
                foreach($species as $specie)
                {
                    echo "<option ";
                    if ($specie['species_id'] == ($getUser['species_id'])) {
                        echo 'selected';
                    }
                    echo " value=" . $specie['species_id'] .">" . $specie['species_description'] ."</option>";
                }
            ?>

        </select>
		<h1>Status</h1>
		<input type="text" name="status" value="<?php echo $getUser['patient_status'] ?>">
        <h1>Gender</h1>
        <input type="radio" name="patient_sex" value="Male" <?php if ($getUser['patient_sex'] == 'Male'){ echo 'checked'; } ?>> Male
        <input type="radio" name="patient_sex" value="Female" <?php if ($getUser['patient_sex'] == 'Female'){ echo 'checked'; } ?>> Female<br>
		<h1>Client</h1>
		<select type="text" name="client" required>
            <?php
                foreach($clients as $client)
                {
                    echo "<option ";
                    if ($client['client_id'] == ($getUser['client_id'])) {
                        echo 'selected';
                    }
                    echo " value=" . $client['client_id'] .">" . $client['client_firstname'] . " " . $client['client_lastname'] ."</option>";
                }
            ?>
        </select>
        <br><br>
		<input type="submit">
</form>

<?php
    }
?>
