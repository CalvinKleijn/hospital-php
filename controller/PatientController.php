<?php

require(ROOT . "model/PatientModel.php");
require(ROOT . "model/ClientModel.php");
require(ROOT . "model/SpecieModel.php");

function index()
{
	render("patients/index", array(
		'patients' => getAllPatients(),
		'clients' => getAllClients(),
 		'species' => getAllSpecies()
	));
}

function create() 
{
	render("patients/create", array(
		'species' => getAllSpecies(),
		'clients' => getAllClients()
	));
}

function createSave()
{
	createPatient();
	header("Location: /hospital-php/patient/index");
}

function delete($id) 
{
	deletePatient($id);
	header("Location: /hospital-php/patient/index");
}

function edit($id) 
{
	render("patients/edit", array(
		'getUsers' => getPatientId($id),
		'species' => getAllSpecies($id),
		'clients' => getAllClients($id)
	));
}
function editSave($id) 
{
	editPatient($id);
	header("Location: /hospital-php/patient/index");
}