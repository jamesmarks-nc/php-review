<?php

require_once("mysqli_connect.php");

// We'll use some logic magic to add a confirmation step into this code.
// First we'll see if this page was POSTed to, this should only happen
// after we've done the confirmation step below (in the elseif portion of the below structure.)
if(isset($_POST['id'])) {
  // We have confirmed that the user wants to delete this record so, try to perform the delete and report back.
  $success = $mysqli->query("DELETE FROM fruit WHERE fruitID = {$_POST['id']}");
  if($success) {
    print "<div>Record deleted</div>";
  } else {
    print "<div>Did not successfully delete record.</div>";
    print "<div><em>Error: " . $mysqli->errno . " -> " . $mysqli->error . "</em></div>\n";
  }
} elseif(isset($_GET['id'])) {
  // The ID is provided in the $_GET but not the $_POST, so we want to confirm by using a 
  // form that submits a POST request (thus creating $_POST['id'] for the next request).
  $details = require_once("fruitDetails.php");

  echo $details;

  print("<div><em>Are you sure you want to delete this record?</em></div>");
  print("<form method='POST'>");
  print("<input type='hidden' name='id' value='{$_GET['id']}'>");
  print("<input type='submit' value='Yes, delete this record.'>");
  print("</form>");

} else {
  // The user must have typed the path to this script into their browser, so let's not 
}

// Regardless of whether either condition is true, we should give a link back to list.
print "<a href='index.php'>Return to Fruit List</a>";

$mysqli->close(); // While explicitly closing open connections and freeing result sets is optional, doing so is recommended.