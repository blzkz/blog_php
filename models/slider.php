<?php
class slider extends model
{
	public function get()
	{
		$query = self::$con->query("SELECT * FROM slider_p ORDER BY id DESC");
		return $query->fetchAll();
	}

	// 
	public function insert($url_img, $link, $description)
	{
		return self::$con->query("INSERT INTO slider (url_img, link, description) values ('$url_img','$link', '$description')");
	}

	public function delete($id)
	{
		return self::$con->query("DELETE FROM slider WHERE id = $id");
	}
}