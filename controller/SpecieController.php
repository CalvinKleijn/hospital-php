<?php

require(ROOT . "model/SpecieModel.php");

function index()
{
	render("species/index", array(
		'species' => getAllSpecies()
	));
}

function create() 
{
	render("species/create");
}

function createSave() 
{
	createSpecie();
	header("Location: /hospital-php/specie/index");
}

function delete($id) 
{
	deleteSpecie($id);
	header("Location: /hospital-php/specie/index");
}

function edit($id) 
{
	render("species/edit", array(
		'getUsers' => getSpecieId($id)));
}

function editSave($id) 
{
	editSpecie($id);
	header("Location: /hospital-php/specie/index");
}