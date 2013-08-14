<?php
class category extends model
{
	public function get()
	{
		$query = self::$con->query("SELECT * FROM categories ORDER BY id DESC");
		return $query->fetchAll();
	}

	public function insert($name)
	{
		return self::$con->query("INSERT INTO categories (name) values ('$name')");
	}
}