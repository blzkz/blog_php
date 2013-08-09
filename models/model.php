<?php

class model
{
	protected static $con;
	
	public function __construct()
	{
		require_once 'models/connect.php';
		self::$con = connect::getInstace();
	}	
}