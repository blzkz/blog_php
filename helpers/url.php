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

function adapta_link($string){
		$array = array(
					'/à|á|â|ã|ä|å|æ|ª/' => 'a',
					'/À|Á|Â|Ã|Ä|Å|Æ/' => 'A',
					'/è|é|ê|ë|ð/' => 'e',
					'/È|É|Ê|Ë|Ð/' => 'E',
					'/ì|í|î|ï/' => 'i',
					'/Ì|Í|Î|Ï/' => 'I',
					'/ò|ó|ô|õ|ö|ø|º/' => 'o',
					'/Ò|Ó|Ô|Õ|Ö|Ø/' => 'o',
					'/ù|ú|û|ü/' => 'u',
					'/Ù|Ú|Û|Ü/' => 'U',
					'/ç/' => 'c',
					'/Ç/' => 'C',
					'/ý|ÿ/' => 'y',
					'/Ý|Ÿ/' => 'Y',
					'/ñ/' => 'n',
					'/Ñ/' => 'N',
					'/[\W¿¡]+/' => '-',
					'/^\-/' => '',
					'/\-$/' => ''
		);
		$patron = '/[\W¿¡]+/';
		return preg_replace(array_keys($array), array_values($array), htmlspecialchars($string, ENT_QUOTES));
		//return preg_replace($patron, "-", $string);
		
}