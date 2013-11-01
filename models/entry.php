<?php
class entry extends model
{
	// Get N last posts
	//private static $con;
	
	/*function __construct()
	{
		require_once 'models/connect.php';
		self::$con = connect::getInstace();
	}*/	

	public function get_n($n)
	{
		$query = self::$con->query("SELECT * FROM news ORDER BY id_news DESC limit $n");
		return $query->fetchAll();
	}
		
	public function get_page($page, $n_posts = 10)
	{
		$from = ($page-1)*$n_posts;
		$query = self::$con->query("SELECT * FROM news ORDER BY id_news DESC LIMIT $from, $n_posts");
		return $query->fetchAll();
	}
	
	public function get_last()
	{
		$query = self::$con->query("SELECT * FROM news ORDER BY id_news DESC LIMIT 1");
		return $query->fetch();
	}

	public function get_by_id($id)
	{
		$query = self::$con->query("SELECT * FROM news where id_news = $id");
		return $query->fetch();
	}
	
	public function count()
	{
		/*
		 * TODO hacer que el puto count funcione, que esto me jode el rendimiento
		 */
		/*
		Ineficiente ->
		$query = self::$con->prepare("SELECT * FROM news");
		$query->execute();
		return $query->rowCount();
		*/
		$query = self::$con->query("SELECT COUNT (*) FROM news");
		return $query;
	}
}