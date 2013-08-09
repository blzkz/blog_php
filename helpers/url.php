<?php
function base_url()
{
	$url = str_replace('index.php','',urldecode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']));
	return $url;
}
function redirect($url)
{
	return header('Location: '.$url);
}