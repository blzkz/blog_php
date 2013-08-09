<?php
class admin 
{
	function index()
	{
		$z = 'das';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/admin.php';
		require_once 'views/admin/footer.php';
	}
	private function isAdmin()
	{
		//session_start();
		if ($_SESSION['nick'] === 'blzkz')
			return true;
		return false;
	}
	function newArticle()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/article.php';
		require_once 'views/admin/footer.php';
	}
	function control()
	{
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'helpers/dbconnector.php';
		$con = connect();
		if (isset($_POST['title'])
			&& ($_POST['title'] != '')
			&& isset($_POST['content'])
			&& ($_POST['content']) != '')
			{
				$content = htmlspecialchars($_POST['content'], ENT_QUOTES);
				$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
				$author = $_SESSION['nick'];
				if ($con->query("INSERT INTO news (title, content, author) VALUES ('".$title."','".$content."','".$author."')"))
					redirect(base_url().'admin');
				$row = $query->fetch();
				if ($row['password'] == $_POST['password']) {
					//session_start();
					$_SESSION['nick'] = $_POST['nick'];
					redirect(base_url());
				}
				else redirect(base_url().'admin/newArticle/error');
			}
		else
		{
			redirect(base_url().'admin/newArticle/error2');
		}
	}

	/* control del form de editArticle */
	function edit()
	{
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/article.php';
		$article = new article();
		$uri = new uri();
		$id = $uri->segment(3);
		if (isset($_POST['title'])
			&& ($_POST['title'] != '')
			&& isset($_POST['content'])
			&& ($_POST['content']) != '')
			{
				$content = htmlspecialchars($_POST['content'], ENT_QUOTES);
				$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
				if ($article->update($id, $title, $content))
					redirect(base_url().'admin/manageArticles');
				else redirect(base_url().'admin/manageArticles/error');
			}
		else
		{
			redirect(base_url().'admin/manageArticles/error2');
		}
	}

	function deleteArticle()
	{
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/article.php';
		$article = new article();
		$uri = new uri();
		$id = $uri->segment(3);
		if ($article->delete($id))
			redirect(base_url().'admin/manageArticles');
		else
			redirect(base_url().'admin/manageArticles/error3');
	}

	function manageArticles()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/article.php';
		require_once 'models/comment.php';
		$articles = new article();
		$articles = $articles->get();
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/man_article.php';
		require_once 'views/admin/footer.php';

	}

	function editArticle()
	{
		$uri = new uri();
		$id = $uri->segment(3);
		if ($id < 1)
			die('The article does not exist');

		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/article.php';
		$article = new article();
		$article = $article->get_by_id($id);
		
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/edit_article.php';
		require_once 'views/admin/footer.php';
	}

	function manageComments()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');

		require_once 'models/comment.php';
		$comments = new comment();
		$comments = $comments->get();
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/man_comment.php';
		require_once 'views/admin/footer.php';

	}

	function editComment()
	{
		$uri = new uri();
		$id = $uri->segment(3);
		if ($id < 1)
			die('The comment does not exist');

		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/comment.php';
		$comment = new comment();
		$comment = $comment->get_by_id($id);
		
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/edit_comment.php';
		require_once 'views/admin/footer.php';

	}

	function deleteComment()
	{
		$uri = new uri();
		$id = $uri->segment(3);
		if ($id < 1)
			die('The comment does not exist');

		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/comment.php';
		$comment = new comment();
		$comment = $comment->delete($id);
		
		redirect(base_url().'admin/manageComments');
	}

	public function manageCategories()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');

		require_once 'models/category.php';
		$categories = new category();
		$categories = $categories->get();
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/man_category.php';
		require_once 'views/admin/footer.php';

	}

}
