<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function connect()
{
	include 'config/database.php';
	return new PDO($db['dbdriver'].':host=' . $db['hostname'] . ';dbname=' . $db['dbname'], $db['username'], $db['password']);
}