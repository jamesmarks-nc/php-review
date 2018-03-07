<?php

// File System

// We will generally not be using this for our coursework this term, but this may become useful to you at a future date.

// Reading files:
// file($filename) -> Returns the file as an array. Each element corresponds to a line in the file with the newline still attached.
// file_get_contents($filename) -> Returns the entire file as a single string value.
// $filename in each case should be a string containing the file name of the file to be read including a relative or absolute path if applicable.

// file() example:
echo "file() example: <br>\n";
$fileArray = file("example.txt");
echo("<pre>");
print_r($fileArray);
echo("</pre>");
echo "<br><br>\n";

// While we're here, there is a neat function for concatenating all the elements in an array into one single string.
echo "Implode example: <br>\n";
echo implode("", $fileArray); 
echo "<br><br>\n";


// But, when dealing with files, it is a little cleaner and easier to use one function to get a continuous string
// file_get_contents() example:
echo "file_get_contents() example: <br>\n";
$fileContents = file_get_contents("example.txt");
echo($fileContents);
echo "<br><br>\n";

// Since we're adding helpful tidbits, how about changing those newlines from the original text file into <BR> tags so that the output is formatted on multiple lines.
echo "str_replace() example: <br>\n";
$replacedVersion = str_replace("\n", "<br>\n", $fileContents); 
echo $replacedVersion;
echo "<br><br>\n";
// Note str_replace() is case sensitive, use str_ireplace() if you want case insensitive searching.
