<?php
class page extends model
{
	public function get()
	{
		$query = self::$con->query("SELECT * FROM pages ORDER BY id DESC");
		return $query->fetchAll();
	}

	// 
	public function insert($name, $url)
	{
		return self::$con->query("INSERT INTO pages (name, url) VALUES ('$name', '$url')");
	}

	public function delete($id)
	{
		return self::$con->query("DELETE FROM pages WHERE id = $id");
	}
}