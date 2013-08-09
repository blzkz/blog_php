<?php
	//$db = new PDO('mysql:host=' . $servidor . ';dbname=' . $bd, $usuario, $contrasenia);
	// Incluimos las clases y constantes necesarias
	include_once('core/uri.php');
	include_once('core/constants.php');
	require('helpers/url.php');

	// objeto de la clase Uri ( core/uri.php )
	$uri = new Uri();
	// si no es nulo el segmento (int)CONTROLLER de la url se asigna, sino usamos el por defecto
	if (!is_null($uri->segment(CONTROLLER)))
	{
		$controller = $uri->segment(CONTROLLER);
		
	}
	else
		$controller = $default_controller;
	// si no es nulo el segmento (int)ACTION de la url se asigna, sino usamos el por defecto
	if (!is_null($uri->segment(ACTION)))
		$action = $uri->segment(ACTION);
	else
		$action = $default_action;
	// Construimos la ruta donde se encuentra el controlador
	$controller_load = $controllers_folder.$controller.'.php';
	// Si existe el controlador se carga, sino se muestra 404

	// Incluimos las clases padres de modelos y controladores
	//include_once($controllers_folder.'controller.php');
	include_once($models_folder.'model.php');

	if ( is_file($controller_load))
		include $controller_load;
	else
		die ('404 not found');
	$do = new $controller();
	// Si existe la funcion $action() en el objeto $do se ejecuta, sino se muestra 404
	if(is_callable(array($do,$action)))
	{
		session_start();
    	$do->$action();
	}
	else
    	die('404 not found');	
