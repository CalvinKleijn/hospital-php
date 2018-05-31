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
	$patient_sex = $_POST['patient_sex'];
	$client = $_POST["client"];

	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients (patient_name, species_id, patient_status, patient_sex, client_id) VALUES (:naam, :specie, :status, :patient_sex, :client)";

	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':specie' => $specie,
		':status' => $status,
		':patient_sex' => $patient_sex,
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

	$sql = "SELECT * FROM patients WHERE patient_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
 }

function editPatient($id) 
{
	$naam = $_POST["naam"];
	$specie = $_POST["specie"];
	$status = $_POST["status"];
	$patient_sex = $_POST['patient_sex'];
	$client = $_POST["client"];

	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :naam, species_id = :specie, patient_status = :status, patient_sex = :patient_sex, client_id = :client WHERE patient_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':naam' => $naam,
		':specie' => $specie,
		':status' => $status,
		':patient_sex' => $patient_sex,
		':client' => $client,
		':id' => $id));

	$db = null;
}

