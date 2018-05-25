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
	header("Location: /hospital-php/client/index");
}

function delete($id) 
{
	deleteClient($id);
	header("Location: /hospital-php/client/index");
}

function edit($id) 
{
	render("clients/edit", array(
		'getUsers' => getClientId($id)));
}

function editSave($id) 
{
	editClient($id);
	header("Location: /hospital-php/client/index");
}