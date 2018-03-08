<?php

  $database = "review"; 
  $server = 	"localhost"; 
  
  $dsn = "mysql:dbname=$database;host=$server";

	$user = 	"root";
	$pass = 	"";

 
  try {
    $db = new PDO($dsn, $user, $pass);
  } catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }