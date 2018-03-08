<?php

/***
 * PDO:
 * 
 * This is just an example of an alternate way to work with databases. PDO is capable of 
 * interfacing with multiple database types, while the MySQLi extension only works with 
 * MySQL databases.
 * 
 * As we will be exclusively using MySQL in this course, we will continue to use the MySQLi
 * extension, so this PDO is simply an example. It will not be further discussed this term.
 ***/

require_once("pdo_connect.php");

// One plus to using PDO is that you can iterate over a query's rows using a foreach loop.
$sql = 'SELECT fruitName, fruitColor, fruitCalories FROM fruit ORDER BY fruitName';
$result = $db->query($sql); // Note: $db was set up in pdo_connect.php which was imported above.
if($result !== FALSE) {
  print "<table>";
  print "<tr><th>Fruit</th><th>Color</th><th>Calories</th></tr>";
  foreach ($result as $row) { 
    print "<tr>";
    print "<td>" . $row['fruitName'] . "</td>";
    print "<td>" . $row['fruitColor'] . "</td>";
    print "<td>" . $row['fruitCalories'] . "</td>";
    print "</tr>";
  }
  print "</table>";
} else {
  print "Error: " . $db->errorCode() . " -> " . $db->errorInfo()[2] . "<BR>\n";
  print "No food in database.";
}