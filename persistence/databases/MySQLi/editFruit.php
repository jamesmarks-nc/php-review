<?php


// This script will provide a form. If we have an ID in $_GET, we'll use this as an edit form.

require_once("mysqli_connect.php");

// If we have a POST request, then the form was submitted.
if(!empty($_POST)) {
  // If the form was submitted with an 'id', then it is an UPDATE
  // Otherwise, its a new record.
  $fruitName = $_POST['fruitName'];
  $fruitColor = $_POST['fruitColor'];
  $fruitCalories = $_POST['fruitCalories'];
  if(isset($_POST['id']) && is_numeric($_POST['id'])) {
    // UPDATE
    $fruitID = $_POST['id'];
    $sql = "UPDATE fruit SET fruitName='$fruitName', fruitColor='$fruitColor', fruitCalories='$fruitCalories' WHERE fruitID = '$fruitID'";
  } else {
    // INSERT
    $sql = "INSERT INTO fruit (fruitName, fruitColor, fruitCalories) VALUES ('$fruitName', '$fruitColor', '$fruitCalories')";
  }

  $result = $mysqli->query($sql); // If operation is an INSERT, UPDATE or DELETE we get back a TRUE or FALSE which indicates whether or not the operation was successful.
  if($result === TRUE) {
    print "<div>Successfully added/updated fruit record.</div>";
    $_GET['id'] = $mysqli->insert_id;
    echo require_once("fruitDetails.php");
  } else { // If it's not TRUE, its FALSE
    print "<div>Could not successfully add/update fruit.</div>";
    print "<div><em>Error: " . $mysqli->errno . " -> " . $mysqli->error . "</em></div>\n";
  }

  print "<a href='index.php'>Return to Fruit List</a>";
  exit(); // Ensures we don't show the form again.

}

if(isset($_GET['id']) && is_numeric($_GET['id'])) {
  // debug: echo("SELECT * FROM fruit WHERE fruitID = {$_GET['id']}");
  $result = $mysqli->query("SELECT * FROM fruit WHERE fruitID = {$_GET['id']}");
  
  // If we try to run $mysqli->query() and it gives us FALSE as a result, then the query doesn't 
  // work. This could be for numerous reasons, but is often caused by an error in the SQL code.
  if($result !== FALSE) {
    $row = $result->fetch_assoc();
  } else {
    print "Error: " . $mysqli->errno . " -> " . $mysqli->error . "<BR>\n";
    print "<a href='index.php'>Return to Fruit List</a>";
    exit(); // Since we hit an error, we can safely exit the script here. If we don't the form below will be rendered.
  }
}


// The difference between the two forms is that when we are in edit mode,
// a value will be included for the hidden field 'fruitID'. We'll know we're in 
// edit mode if we were able to retrieve a record thus having a values set for $row[...]
print "<form method='POST'>\n";
print isset($row['fruitID']) ? "<input type='hidden' name='id' value='{$row['fruitID']}'>\n" : "";
print "<div><label>Fruit Name: <input name='fruitName' value='" . ( isset($row['fruitName']) ? $row['fruitName'] : "" ) . "'></label></div>\n";
print "<div><label>Fruit Color: <input name='fruitColor' value='" . ( isset($row['fruitColor']) ? $row['fruitColor'] : "" ) . "'></label></div>\n";
print "<div><label>Fruit Calories: <input name='fruitCalories' value='" . ( isset($row['fruitCalories']) ? $row['fruitCalories'] : "" ) . "'></label></div>\n";
print "<div><input type='submit' value='Save'><input type='Reset' value='Undo'></div>\n";
print "</form>\n";

print "<a href='index.php'>Return to Fruit List</a>";