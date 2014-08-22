<?php
class article extends model
{
	// Get N last posts
	//private static $con;

	public function insert($title, $content, $author, $img)
	{
		return self::$con->query("INSERT INTO articles (title, content, author, image) VALUES ('$title','$content','$author', '$img')");
	}

	public function get_n_last($n)
	{
		$query = self::$con->query("SELECT * FROM articles ORDER BY id_article DESC limit $n");
		return $query->fetchAll();
	}	

	public function get_n($n)
	{
		$query = self::$con->query("SELECT * FROM articles ORDER BY id_article DESC limit $n");
		return $query->fetchAll();
	}
		
	public function get_page($page, $n_posts = 10)
	{
		$from = ($page-1)*$n_posts - 5;
		$query = self::$con->query("SELECT * FROM articles ORDER BY id_article DESC LIMIT $from, $n_posts");
		return $query->fetchAll();
	}
	
	public function get()
	{
		$query = self::$con->query("SELECT * FROM articles ORDER BY id_article DESC");
		return $query->fetchAll();
	}
	public function get_last()
	{
		$query = self::$con->query("SELECT * FROM articles ORDER BY id_article DESC LIMIT 1");
		return $query->fetch();
	}

	public function get_by_id($id)
	{
		$query = self::$con->prepare("SELECT * FROM articles where id_article = ?");
		$query->execute(array($id));
		return $query->fetch();
	}
	
	public function count()
	{
		$q = self::$con->prepare("SELECT COUNT(*) as records FROM articles");
		$q->execute();    
		$records = (int) $q->fetch(PDO::FETCH_OBJ)->records;
		return $records;

	}

	public function update($id, $title, $content, $img)
	{
		return self::$con->query("UPDATE articles SET title='$title', content='$content', image='$img' where id_article = $id");
	}

	public function delete($id)
	{
		return self::$con->query("DELETE FROM articles WHERE id_article = $id");
	}
	
	public function max_id()
	{
		$query = self::$con->query("SELECT MAX(id_article) FROM articles");
		$a = $query->fetch();
		return $a['MAX(id_article)'];
	}
	public function exists($id)
	{
		return (count($this->get_by_id($id)) > 0);
	}
}
