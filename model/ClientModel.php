<?php

function getAllClients () 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients";

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createClient() 
{
	$voornaam = $_POST["voornaam"];
	$achternaam = $_POST["achternaam"];

	$db = openDatabaseConnection();

	$sql = "INSERT INTO clients (client_firstname, client_lastname) VALUES (:voornaam, :achternaam)";

	$query = $db->prepare($sql);
	$query->execute(array(
		':voornaam' => $voornaam,
		':achternaam' => $achternaam));

	$db = null;
}

 function deleteClient($id) 
 {
 	$db = openDatabaseConnection();

	$sql = "DELETE FROM clients WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;

	return $query->fetchAll();
 }

 function getClientId($id)
 {
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM clients WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetchAll();
 }

function editClient($id) 
{
	$voornaam = $_POST["voornaam"];
	$achternaam = $_POST["achternaam"];

	$db = openDatabaseConnection();

	$sql = "UPDATE clients SET client_firstname = :voornaam, client_lastname = :achternaam WHERE client_id = :id";

	$query = $db->prepare($sql);
	$query->execute(array(
		':voornaam' => $voornaam,
		':achternaam' => $achternaam,
		':id' => $id));

	$db = null;
}