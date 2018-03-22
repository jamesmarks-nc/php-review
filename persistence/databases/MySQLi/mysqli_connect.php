<?php
	//database information 
	$server =   "localhost"; 
	$username = "root";
	$password = "";
  $database = "review"; 
         
	//make a database connection object
	$mysqli = new mysqli($server, $username, $password, $database);	
	
	//test if there are database connection errors
	if ($mysqli->connect_error) 
		die("Connect Error " . $mysqli->connect_error);
	
?>