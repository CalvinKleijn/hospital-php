<?php

function getAllPatients() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients
	INNER JOIN species ON patients.species_id = species.species_id 
	INNER JOIN clients ON patients.client_id = clients.client_id";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createPatient() 
{
	$naam = $_POST["naam"];
	$specie = $_POST["specie"];
	$status = $_POST["status"];
	$client = $_POST["client"];

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (patient_name, species_id, patient_status, client_id) VALUES (:naam, :specie, :status, :client)";

	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':specie' => $specie,
		':status' => $status,
		':client' => $client));

	$db = null;
}

 function deletePatient($id) 
 {
 	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;

	return $query->fetchAll();
 }

 function getPatientId($id)
 {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients
			JOIN species ON patients.species_id = species.species_id 
			JOIN clients ON patients.client_id = clients.client_id 
			WHERE patient_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
 }