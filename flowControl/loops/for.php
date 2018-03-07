<?php

// For Loops

// Aside from a foreach() loop, for loops are the briefest syntax for a loop. 
// However, because of its brevity, beginners sometimes find it a little tougher to absorb and retain its syntax.

// With a for() loop, if you wanted to choose 10 random lotto numbers between 1 and 49
for($times = 1; $times <= 10; $times++) {
  echo("<li>" . rand(1,49) . "</li>");
}
// Note: This does exactly what the while() loop example does from while.php. It is just a more compact syntax.

// For loop Flow:
// Pseudocode: for([initialize]; [test]; [increment]) { [code] }
/*
 1. Perform [initialize]
 2. Do [test]
   a. If test evaluates to true, go to step 3
   b. If test evaluates to false, stop exit loop moving to next statement after loop's code block (if any)
 3. Perform [code]
 4. Perform [increment]
 5. Go back to step 2 until [test] evaluates to false.
*/