<?php
class article extends model
{
	// Get N last posts
	//private static $con;

	public function get_n_last($n)
	{
		$query = self::$con->query("SELECT * FROM news ORDER BY id_news DESC limit $n");
		return $query->fetchAll();
	}	

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
	
	public function get()
	{
		$query = self::$con->query("SELECT * FROM news ORDER BY id_news DESC");
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
		$q = self::$con->prepare("SELECT COUNT(*) as records FROM news");
		$q->execute();    
		$records = (int) $q->fetch(PDO::FETCH_OBJ)->records;
		return $records;

	}

	public function update($id, $title, $content)
	{
		self::$con->query("UPDATE news SET title='$title', content='$content' where id_news = $id");
	}

	public function delete($id)
	{
		self::$con->query("DELETE FROM news WHERE id_news = $id");
	}
}