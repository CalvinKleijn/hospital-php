<?php
function getAllBirthdays() 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays ORDER BY month, day, person ASC";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function createBirthday() 
{
	$persoon = $_POST["persoon"];
	$dag = $_POST["dag"];
	$maand = $_POST["maand"];
	$jaar = $_POST["jaar"];
	$db = openDatabaseConnection();
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES ('$persoon', '$dag', '$maand', '$jaar')";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

 function deleteBirthday($id) 
 {
 	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
 }

function getBirthday($id) 
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function editBirthday($id) 
{
	$persoon = $_POST["persoon"];
	$dag = $_POST["dag"];
	$maand = $_POST["maand"];
	$jaar = $_POST["jaar"];
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET person='$persoon', day='$dag', month='$maand', year='$jaar' WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}


