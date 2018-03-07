<?php

// Data types: Internally managed
1;                            // Integer
1.5;                          // Float
"String";                     // String
true;                         // Boolean
[ 'a', 'b', 'c', 'd', 'e' ];  // Array
null;                         // NULL
// Note: the above lines of code evaluate, but no visible output will be generated as the values are not provided to an echo() or print() and are not assigned to any variable.

// Dates are handled a bit differently to allow us to easily do date operations.
$d1 = new DateTime("2018-01-01");
echo $d1->format('Y-m-d') . "<BR>\n";

$d2 = new DateTime(); // defaults to 'now', which is the moment this line of script is run.
echo $d2->format('Y-m-d') . "<BR>\n";

// Object and Resource as well, but we will not create any from scratch.

// As demonstrated above, we can output values to the HTML client
// using echo or print. Use echo any time you want to output for 
// the final product.
echo "Hello world." . "<BR>\n";
echo "<strong>I can use HTML tags here too</strong>" . "<BR>\n";
echo 12 . "<BR>\n"; // Numbers will be converted to strings for you automatically.

// We should process arrays either one element at a time, using a loop, or by referencing their named keys in the case of associative arrays.
echo [ 'some', 'array' ]; // Arrays will not be automatically converted, so you'll get errors from this. Instead use print_r() (see variables.php)