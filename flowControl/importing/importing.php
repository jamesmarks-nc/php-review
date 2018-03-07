<?php

// You can separate your code into separate files and then import the code from those files into any other PHP file

// There are 4 built-in functions we can use to import code: include(), include_once(), require(), require_once();
// include() and include_once() will only produce a warning when they cannot find the included file, but the script will continue to execute.
// require() and require_once() will produce an error and halt script execution if they cannot find the file.

// The include_once() and require_once() variants, as you might expect will not import a file an additional time if it has already been imported.
// This is particularly helpful for scripts that use up system resources or that may reset previously initialized resources like database connections.

// It is recommended that you give priority to the require and _once variants first unless there is some logical reason you should not.
// Priority list:
// 1. require_once();
// 2. require();
// 3. include_once();
// 4. include();

// When a file is imported via one of these methods, the 
  // If the imported file returns some value, the result can be used as a value in the importing script.
  // Example:
  echo("<b>With return example:</b><br>\n");
  $importedValue = require_once("importedReturn.php");
  echo($importedValue);

  echo("<br>");
  
  
  echo("<b>No return example:</b><br>\n");
  // If the imported file does not return a value, its code is simply executed in place.
  require_once("importedNoReturn.php");

// For the most part, this is a matter of style choice on the part of the developer.