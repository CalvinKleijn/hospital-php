<?php

function getAllSpecies () 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createSpecie() 
{
	$beschrijving = $_POST["beschrijving"];

	$db = openDatabaseConnection();

	$sql = "INSERT INTO species (species_description) VALUES (:beschrijving)";

	$query = $db->prepare($sql);
	$query->execute(array(
		':beschrijving' => $beschrijving));

	$db = null;
}

 function deleteSpecie($id) 
 {
 	$db = openDatabaseConnection();

	$sql = "DELETE FROM species WHERE species_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;

	return $query->fetchAll();
 }

 function getSpecieId($id)
 {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species WHERE species_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
 }