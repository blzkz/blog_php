<?php
class login
{
	function index()
	{
		$uri = new Uri();
		$error = false;
		if ($uri->segment(3) != NULL)
			$error = true;
		require_once 'views/header.php';
		require_once 'views/login.php';
		require_once 'views/footer.php';
	}
	function control()
	{
		require_once 'helpers/dbconnector.php';
		$con = connect();
		if (isset($_POST['nick'])
			&& ($_POST['nick'] != '')
			&& isset($_POST['password'])
			&& ($_POST['password']) != '')
			{
				$query = $con->prepare("SELECT * FROM users WHERE nick = ?");
				if ($query->execute(array($_POST['nick'])))
				{
					$row = $query->fetch();
					if ($row['password'] == $_POST['password']) {
						//session_start();
						$_SESSION['nick'] = $_POST['nick'];
						redirect(base_url());
					}
					else redirect(base_url().'login/index/error');
				}
				/*if ($row['password'] == $_POST['password']) {
					//session_start();
					$_SESSION['nick'] = $_POST['nick'];
					redirect(base_url());
				}*/
				else redirect(base_url().'login/index/error');
			}
		else
		{
			redirect(base_url().'login/index/error');
		}
	}
	function logout()
	{
		//session_start();
		session_destroy();
		redirect(base_url());
	}
}
