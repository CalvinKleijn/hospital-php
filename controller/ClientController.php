<?php

require(ROOT . "model/ClientModel.php");

function index()
{
	render("clients/index", array(
		'clients' => getAllClients()
	));
}

function create() 
{
	render("clients/create");
}

function createSave()
{
	createClient();
	header("Location: /kalender/client/index");
}

function delete($id) 
{
	deleteClient($id);
	header("Location: /kalender/client/index");
}