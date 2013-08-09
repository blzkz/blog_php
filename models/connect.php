<?php
/* 
 * Class connect: singleton that returns a instance of PDO object
 */
class connect
{
	private static $connection = NULL;
	private function __construct() 
	{
		
	}
	
	// Pillamos una instancia de $connection
	static function getInstace()
	{
		if (self::$connection == NULL)
		{
			include_once('helpers/dbconnector.php');
			self::$connection = connect(); //LOLWOOT
		}
		return self::$connection;
	}
}