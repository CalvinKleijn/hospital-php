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
	header("Location: /kalender/specie/index");
}

function delete($id) 
{
	deleteSpecie($id);
	header("Location: /kalender/specie/index");
}

