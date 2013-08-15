<?php
class blog 
{
	function index()
	{
		$pagina = 1;
		require_once 'models/article.php';
		require_once 'models/comment.php';
		$art = new article();
		$num = $art->count();
		$art = $art->get_n_last(5);
		$i = 0;
		$com = new comment();
		foreach ($art as $article)
		{
			$id = $article['id_articles'];
			$art[$i]['n_comments'] = $com->count($id);
			//print_r($ent[$i]['n_comments']);
			$i++;
			
		}
		$max_pages = ceil(($num-5)/10)+1;
		require_once('views/header.php');
		require_once('views/blog.php');
		require_once('views/footer.php');
	}
	
	function article()
	{
		require_once 'models/article.php';
		require_once 'models/comment.php';
		$ent = new article();
		$uri = new uri();
		$com = new comment();
		if ( $uri->segment(3) > 0 ) 
		{
			$ent = $ent->get_by_id($uri->segment(3));
			$com = $com->get_all($uri->segment(3));
			require_once('views/header.php');
			require_once('views/article.php');
			require_once('views/footer.php');
		}
		else die ("404 not found");
	}

	function control_comment()
	{
		require_once 'models/comment.php';
		if (!isset($_SESSION['nick']))
		{
			if ($_POST['nick'] === '' || $_POST['email'] === '' || $_POST['comment'] === '')
				die("no has rellenado el formulario");
			else
			{
				$comment = new comment();
				$uri = new uri();
				$nick = htmlspecialchars($_POST['nick'],ENT_QUOTES);
				$email = htmlspecialchars($_POST['email'],ENT_QUOTES);
				$content = htmlspecialchars($_POST['comment'],ENT_QUOTES);
				$id_article = htmlspecialchars($_POST['id'],ENT_QUOTES);
				//echo 'id '.$id_articles.' nick '.$nick.' email '.$email. ' com '.$content;
				$comment->insert($id_article, $nick, $email, $content);
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		else
		{
			if ($_POST['comment'] != '') {
				$comment = new comment();
				require_once 'models/user.php';
				$user = new user();
				$uri = new uri();
				$user = $user->get_by_nick($_SESSION['nick']);
				$content = htmlspecialchars($_POST['comment'],ENT_QUOTES);
				$id_articles = htmlspecialchars($_POST['id'], ENT_QUOTES);
				$comment->insert($id_articles, $user['nick'], $user['email'], $content);
				redirect($_SERVER['HTTP_REFERER']);
			}
			else die("no has completado el formulario");
		}
	}
	// blog page number N
	function page()
	{
		$uri = new Uri();
		$pagina = $uri->segment(3);
		if (is_null($pagina))
			$pagina = 1;
		if (settype($pagina, 'integer'))
		{
			if ($pagina === 1)
			{
				require_once 'models/article.php';
				require_once 'models/comment.php';
				$art = new article();
				$num = $art->count();
				$art = $art->get_n_last(5);
				$i = 0;
				$com = new comment();
				foreach ($art as $article)
				{
					$id = $article['id_articles'];
					$art[$i]['n_comments'] = $com->count($id);
					$i++;
				}
				$max_pages = ceil(($num-5)/10)+1;
				require_once('views/header.php');
				require_once('views/blog.php');
				require_once('views/footer.php');

			}
			else if ($pagina > 1) 
				{
					require_once 'models/article.php';
					require_once 'models/comment.php';
					$art = new article();
					$articles = $art->get_page($pagina);
					$i = 0;
					$com = new comment();
					foreach ($articles as $article)
					{
						$id = $article['id_articles'];
						$articles[$i]['n_comments'] = (int)$com->count($id);
						$i++;
					}
					$num_ent = $art->count();
					$max_pages = ceil(($num_ent - 5)/10) + 1;
					require_once('views/header.php');
					require_once('views/pagina.php');
					require_once('views/footer.php');
				}
				else die ("404 Not Found");	
		}
		else die ("404 Not Found");		
		
	}
	public function prueba()
	{
		
		if (is_int("asdfasdf"))
			echo "entero";
		else echo "no es entero";
		//require_once('views/pagina.php');
		
	}
} 
?>