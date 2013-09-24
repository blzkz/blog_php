<?php
class home
{
	private function tweets()
	{
		$url = "https://api.twitter.com/1/statuses/user_timeline.json?include_rts=true&screen_name=blzkz&count=2";
		$last_tweets = file_get_contents($url,0,null,null);
		return json_decode($last_tweets);
		
		/*foreach ($ultimo_tweet as $tweet) {
			echo $tweet->text;
		}*/
	}
	public function index()
	{
		require_once 'models/article.php';
		//$pagina = 1;
		$ent = new article();
		$ent = $ent->get_n_last(2);
		require_once 'views/header.php';
		//$last_tweets = $this->tweets();
		
		require_once 'views/principal.php';
		require_once 'views/footer.php';
	}
	public function php_version()
	{
		phpinfo();
	}
	public function prueba()
	{
		
	}
	public function tuiter()
	{
		$url = "https://api.twitter.com/1/statuses/user_timeline.json?include_rts=true&screen_name=blzkz&count=1";
		$ultimo_tweet = file_get_contents($url,0,null,null);
		$ultimo_tweet = json_decode($ultimo_tweet);
		foreach ($ultimo_tweet as $tweet) {
			echo $tweet->text;
		}
	}
}