<?php
	//setting header to json
	header('Content-Type: application/json');

	//database
	define('DB_HOST', '127.0.0.1');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD',  "");
	define('DB_NAME', 'import');

	//get connection
	$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if(!$mysqli){
	  die("Connection failed: " . $mysqli->error);
	}

	//query to get data from the table
	$query = sprintf("SELECT tempo, temperatura_1, temperatura_2, temperatura_3, temperatura_4,  temperatura_5,  temperatura_6,  temperatura_7,  temperatura_8,  temperatura_9,  temperatura_10,  temperatura_11,  temperatura_12 FROM csv");

	//execute query
	$result = $mysqli->query($query);

	//loop through the returned data
	$data = array();
	foreach ($result as $row) {
	  $data[] = $row;
	}

	//free memory associated with result
	$result->close();

	//close connection
	$mysqli->close();

	//now print the data
	print json_encode($data);
?>