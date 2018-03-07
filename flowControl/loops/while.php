<?php

// While Loops

// While loops are possibly the easiest syntax to learn when writing loops that depend on a condition rather than iterating through an array.
// One common example is that you may want to perform a task a set number of times.

// For example, if you wanted to choose 10 random lotto numbers between 1 and 49
$times = 1;
while($times <= 10) {
  echo("<li>" . rand(1,49) . "</li>");
  $times++; // Add 1 to the value of $times.
}

/* If you examine the code above, you will see the 3 parts of an effective loop */
//  1. Initialize          -> $times = 1;
    // Ensure you set up a control variable
//  2. Test / Condition    -> while($times <= 10)
    // Set a condition that must remain true in order for the loop to repeat.
    // This will be tested over and over again each time the loop's code block has completed until it is no longer true.
//  3. Increment / Update  -> $times++;
    // Ensure that you guarantee some change to the control variable at some point. 
    // If you are in direct control of the control variable, ensure that the change is affected inside of the loop's code block.

