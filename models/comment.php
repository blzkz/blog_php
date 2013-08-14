<?php
class comment extends model
{

	public function count($id)
	{

		$q = self::$con->prepare("SELECT COUNT(*) as records FROM comments where id_entry = $id");
		$q->execute();    
		$records = (int) $q->fetch(PDO::FETCH_OBJ)->records;
		return $records;
	}

	public function insert($id_article, $nick, $email, $content, $ip='0')
	{
		return self::$con->query("INSERT INTO comments (id_entry, comment, email, nick, ip) 
			VALUES ('$id_article', '$content', '$email', '$nick', '$ip')");
	}

	public function get()
	{
		$query = self::$con->query("SELECT * FROM comments ORDER BY id DESC");
		return $query->fetchAll();
	}

	public function get_by_id($id)
	{
		$query = self::$con->query("SELECT * FROM comments where id = $id");
		return $query->fetch();
	}

	public function get_all($id)
	{
		$query = self::$con->query("SELECT * FROM comments where id_entry=$id");
		return $query->fetchAll();
	}

	public function update($id, $content)
	{
		self::$con->query("UPDATE comments SET commment='$comment' where id = $id");
	}

	public function delete($id)
	{
		$query = self::$con->query("DELETE FROM comments where id=$id");
	}

	public function count_by_article($id)
	{
		$q = self::$con->prepare("SELECT COUNT(*) as records FROM comments where id_entry = $id");
		$q->execute();    
		$records = (int) $q->fetch(PDO::FETCH_OBJ)->records;
		return $records;

	}
}