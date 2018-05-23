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
	header("Location: /kalender/patient/index");
}

function delete($id) 
{
	deletePatient($id);
	header("Location: /kalender/patient/index");
}
