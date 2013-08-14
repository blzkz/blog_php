<?php
class category extends model
{
	public function get()
	{
		$query = self::$con->query("SELECT * FROM categories ORDER BY id DESC");
		return $query->fetchAll();
	}

}