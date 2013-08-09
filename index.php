<?php
	define('BASEPATH', str_replace("\\", "/",realpath("")));
	
	// definimos variables para la carpeta controllers y 
	// valores por defecto de controlador y acción
	$controllers_folder = 'controllers/';
	$models_folder = 'models/';
	$default_controller = 'home';
	$default_action = 'index';
	$default_id = 1;

	require_once('core/core.php');