<?php
class comment extends model
{


	public function count()
	{

		$query = self::$con->query("SELECT COUNT (*) FROM comments");
		return $query;
	}

}