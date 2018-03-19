<?php

// Variables are named spaces in temporary memory which can be used to store, manipulate and retrieve data.
// Variable names start with a dollar sign ($) followed by a series of alphanumeric characters. 
// Names may not include spaces, but camelCase or underscore_separation can be used to indicate distinct parts of a variable name.

// Declaring a variable
$numVariable1 = 123;
$stringVariable = "Hello World";
$dateVariable = new DateTime();

// Variables can also be declared using expressions (any series of values and operators). You're not limited to applying simple values
$numVariable2 = 12 * $numVariable1;

// You can change the value of a variable at any time:
$numVariable2 = 5; // Because I can.
$numVariable2 = $numVariable2 + 10; // Add 10 to the number... 15.

// There are shorthand compound assignment operators that take a variable's starting value, do something with it and then update that value;
$numVariable2 += 10; // Add 10 more to the number... now its 25.
$numVariable2 *= 4;  // Multiply by 4. 100.
$numVariable2 -= 10; // Minus 10. 90.
$numVariable2 /= 3;  // Divide by 3. 30.

// See /operators/string.php for an example of the compound concatenation operator (.=)

// Declaring arrays
$arrayVariable1 = array("a", "b", "c", "d");   // always compatible
$arrayVariable2 = [ "a", "b", "c", "d", "e" ]; // array literal syntax, compatible since PHP version 5.4.0

// Variables are values too. You can use them just like literal values and whatever is stored inside memory will be used.
echo "Hello World! (Literal string) <BR>\n";
$helloWorld = "Hello World! (Assigned to Variable) <BR> \n";
echo $helloWorld;

// Debugging (Particularly arrays)

// If you try to echo() an array, you will receive an error.
// echo [ 'some', 'array' ]; // error
// echo $arrayVariable1; // error

// When debugging, it is recommended you use print_r() to examine your variables
// print_r will parse and output arrays, so you don't have the same limitations that you would with echo() or print()
print_r(['some', 'array']);

// You may want to place your print_r output in an HTML <pre> element to make it more readable when rendering the page to your browser.
echo("<pre>");
print_r($arrayVariable1); // This was declared around line 28.
echo("</pre>");

// Remember to remove instances of print_r() before submitting your final product.