<?php

// Foreach Loop

// This loop is tailor made to work with all the elements in an array. You can use it with both associative and default indexed arrays.
$groceries = [
  "Apples" => 2.14,
  "Canned Juice" => 1.45,
  "Pizza Pops" => 8.00,
  "Cold Cuts" => 3.49,
  "Sliced Cheese" => 5.50,
  "Lettuce" => 1.35,
  "Tomatoes" => 3.40,
  "Mayonaise" => 5.99,
  "Sandwich Bread" => 3.95
];

// This will just handle values. The above array may as well have not had associative keys defined, but we're going to use them in the next example.

// foreach() with just $value
$total = 0;
foreach($groceries as $value) {
  $total += $value;
}
echo ("Total: " . $total . " <br>\n");


// Foreach() with $key => $value
$total = 0;
$taxTotal = 0;
echo ("Receipt: <BR>\n");
foreach($groceries as $key => $value) {
  $taxAmt = $value * 0.05;
  echo( $key . " >>> " . $value . "<BR>\n" );
  $taxTotal += $taxAmt;
  $total += $value;
}
echo ("Subtotal: " . $total . " <br>\n");
echo ("Tax: " . $taxTotal . "<br>\n");
echo ("Total: " . ($total + $taxTotal) . "<br>\n");

// There are a number of other things we can do to clean up this output, but the point should be clear that a foreach loop will allow you to work with an
// arbitrary number of elements with little knowledge of how many there will be or what values they will contain beforehand.

