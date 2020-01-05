<?php
	//database
	define('DB_HOST', '127.0.0.1');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'import');

	//get connection
	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or
	 die ('Não foi possível conectar');
?>