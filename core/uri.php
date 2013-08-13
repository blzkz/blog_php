<?php
class Uri
{
	/* devuelve el segmento de la url contando a partir del index.php */
	function segment($i = 0)
	{
		/* Descomentar para 1and1
		 * if (isset($_SERVER['ORIG_PATH_INFO']))
			$array = explode('/', $_SERVER['ORIG_PATH_INFO']);*/
		if (isset($_SERVER['ORIG_PATH_INFO']))
			$array = explode('/', $_SERVER['ORIG_PATH_INFO']);
		else if(isset ($_SERVER['PATH_INFO']))
				$array = explode ('/', $_SERVER['PATH_INFO']);
			else return NULL;
		
		if (isset($array[$i]) && $array[$i]!= '')
			return $array[$i];
		else
			return NULL;
	}
	function array_segment()
	{
		if (isset($_SERVER['ORIG_PATH_INFO']))
			return explode('/', $_SERVER['ORIG_PATH_INFO']);
		else if(isset ($_SERVER['PATH_INFO']))
				return explode('/', $_SERVER['PATH_INFO']);
			else return NULL;
	}
}