<?php
class work extends model
{
	public function get()
	{
		$query = self::$con->query("SELECT * FROM works ORDER BY id DESC");
		return $query->fetchAll();
	}

	// 
	public function insert($job, $link, $image, $description)
	{
		return self::$con->query("INSERT INTO works (job, link, image, description) VALUES ('$job', '$link', '$image', '$description')");
	}

	public function delete($id)
	{
		return self::$con->query("DELETE FROM slider WHERE id = $id");
	}
}