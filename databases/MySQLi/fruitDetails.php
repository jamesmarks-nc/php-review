<?php

// This is just for reading and outputting details about a single record in the fruit table.

require_once("mysqli_connect.php");

$result = $mysqli->query("SELECT * FROM fruit WHERE fruitID = {$_GET['id']}");
  
// If we try to run $mysqli->query() and it gives us FALSE as a result, then the query doesn't 
// work. This could be for numerous reasons, but is often caused by an error in the SQL code.
if($result !== FALSE) {
  $row = $result->fetch_assoc();

  $details = 
    "<table>
      <tr><th align='left'>Fruit Name:</th><td>{$row['fruitName']}</td></tr>
      <tr><th align='left'>Fruit Color:</th><td>{$row['fruitColor']}</td></tr>
      <tr><th align='left'>Fruit Calories:</th><td>{$row['fruitCalories']}</td></tr>
    </table>";
} else {
  $details = "Error: " . $mysqli->errno . " -> " . $mysqli->error . "<BR>\n";
}

return $details;