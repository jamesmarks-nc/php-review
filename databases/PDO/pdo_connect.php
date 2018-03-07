<?php

  $database = "your_schema_name_here"; 
  $server = 	"localhost"; 
  
  $dsn = "mysql:dbname=$database;host=$server";

	$user = 	"root";
	$pass = 	"";

 
  try {
    $dbh = new PDO($dsn, $user, $password);
  } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }