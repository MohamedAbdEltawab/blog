<?php

namespace App\Core;


class Request 

{


	public static function uri()
	{


		

		// $uri = trim(
		// 	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'

		// );

		return $uri = trim(str_replace(dirname($_SERVER['SCRIPT_NAME']), '', $_SERVER['REQUEST_URI']), '/' );
	
	}


	public static function method()
	{

		return $_SERVER['REQUEST_METHOD'];
	
	}
	
}