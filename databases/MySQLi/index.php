<?php

require_once("mysqli_connect.php");

// Note: $mysqli was set up in mysqli_connect.php which was imported above.
$result = $mysqli->query("SELECT fruitID, fruitName, fruitColor, fruitCalories FROM fruit ORDER BY fruitName");

// If we try to run $mysqli->query() and it gives us FALSE as a result, then the query doesn't 
// work. This could be for numerous reasons, but is often caused by an error in the SQL code.
if($result !== FALSE) {
  
  print "<table>";
  print "<tr><th>Fruit</th><th>Color</th><th>Calories</th></tr>";

  // To iterate (read) through a MySQLi result set one row at a time, use the following while construct as a template.
  while ( $row = $result->fetch_assoc() ) { 
    print "<tr>";
      print "<td>" . $row['fruitName'] . "</td>";
      print "<td>" . $row['fruitColor'] . "</td>";
      print "<td>" . $row['fruitCalories'] . "</td>";
      print "<td>
              <a href='editFruit.php?id={$row['fruitID']}'>Edit</a> |
              <a href='fruitDetails.php?id={$row['fruitID']}'>Details</a> |
              <a href='deleteFruit.php?id={$row['fruitID']}'>Delete</a>
             </td>";
    print "</tr>";
  }
  
  print "</table>";

} else {
  print "Error: " . $mysqli->errno . " -> " . $mysqli->error . "<BR>\n";
  print "No food in database.";
}

print "<a href='editFruit.php'>Add Fruit</a>";