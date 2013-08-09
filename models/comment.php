<?php
class comment extends model
{
	function __construct()
	{
		require_once 'models/connect.php';
		self::$con = connect::getInstace();
	}

	public function count($id)
	{

		$q = self::$con->prepare("SELECT COUNT(*) as records FROM comments where id_entry = $id");
		$q->execute();    
		$records = (int) $q->fetch(PDO::FETCH_OBJ)->records;
		return $records;
	}

	public function get()
	{
		$query = self::$con->query("SELECT * FROM comments ORDER BY id DESC");
		return $query->fetchAll();
	}

	public function get_all($id)
	{
		$query = self::$con->query("SELECT * FROM comments where id_entry=$id");
		return $query->fetchAll();
	}

}