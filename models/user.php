<?php
class user extends model
{
	public function get_by_nick($nick)
	{
		$query = self::$con->query("SELECT * FROM users where nick='$nick'");
		return $query->fetch();
	}
}