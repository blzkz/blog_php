<?php
class admin 
{
	public function index()
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
	public function newArticle()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/article.php';
		require_once 'views/admin/footer.php';
	}

	/* cotrol de new article */
	public function control()
	{
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		if (isset($_POST['title'])
			&& ($_POST['title'] != '')
			&& isset($_POST['content'])
			&& ($_POST['content']) != '')
			{
				require_once 'models/article.php';
				$article = new article();
				$content = htmlspecialchars($_POST['content'], ENT_QUOTES);
				$title = htmlspecialchars($_POST['title'], ENT_QUOTES);
				$author = $_SESSION['nick'];
				if ($article->insert($title, $content, $author))
					redirect(base_url().'admin');
				else redirect(base_url().'admin/newArticle/error');
			}
		else
		{
			redirect(base_url().'admin/newArticle/error2');
		}
	}

	/* control del form de editArticle */
	public function edit()
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

	public function deleteArticle()
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

	public function manageArticles()
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

	public function editArticle()
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

	public function manageComments()
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

	public function editComment()
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

	public function controlComment()
	{
		$uri = new uri();
		$id = $uri->segment(3);
		if ($id < 1)
			die('The comment does not exist');
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');

		require_once 'models/comment.php';
		$com_content = htmlspecialchars($_POST['comment'], ENT_QUOTES);
		$comment = new comment();
		echo $com_content;
		$comment = $comment->update($id, $com_content);
		redirect(base_url().'admin/manageComments');
	}

	public function deleteComment()
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

	public function addCategory()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');

		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/add_category.php';
		require_once 'views/admin/footer.php';
	}

	public function controlCategory()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');

		require_once 'models/category.php';
		$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
		$category = new category();
		$category->insert($name);
		redirect(base_url().'admin/manageCategories');
	}

	public function editCategory()
	{
		redirect(base_url().'admin/manageCategories');
	}

	public function deleteCategory()
	{
		$uri = new uri();
		$id = $uri->segment(3);
		if ($id < 1)
			die('The comment does not exist');

		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');
		require_once 'models/category.php';
		$category = new category();
		$category = $category->delete($id);
		
		redirect(base_url().'admin/manageCategories');
	}

	// Manage the slider images, description and links

	public function manageSlider()
	{
		$z = 'Ent';
		if (!$this->isAdmin())
			die('No tienes permisos para ver esta parte');

		require_once 'models/slider.php';
		$slides = new category();
		$slides = $slides->get();
		require_once 'views/admin/header.php';
		require_once 'views/admin/sidebar.php';
		require_once 'views/admin/man_slider.php';
		require_once 'views/admin/footer.php';

	}

}
