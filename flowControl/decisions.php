<?php

//Decision making structures. 
// * if(), elseif(), else 
// * switch(), case:, default:

// If statement allows you to provide a boolean to determine if its related block of code should run.
if(true) {  // this should run
}
if(false) {  // this will not run
}
// It wouldn't be useful if we put in our boolean values directly as exemplified above though,
// Usually people use a meaningful comparison for an if()'s parameter
$age = 18; 
echo("Example 1: if() <BR>\n");
if($age >= 19) { // 18 < 19 so the condition is false. the code will not run
  echo ("Welcome to the voting age version of this website.<br>\n");
}
if($age < 19) { // 18 < 19 so the condition is true. the code will run
  echo ("Welcome to the non-voting version of this website.<br>\n");
}

// Else
// We can provide alternative logic with an else block
echo("Example 2: else<BR>\n");
if($age >= 19) {
  // This will run if voting age is supplied
  echo ("Welcome to the voting age version of this website.<br>\n");
} else {
  // This will run in any other case. This is "default" code.
  // Note that because else is default code, no condition should be supplied. 
  // This runs only if the previous if() block(s) did not succeed and acts as a catch-all.
  echo ("Welcome to the non-voting version of this website.<br>\n");
}

// ElseIf
// We may also want to chain together logic using else if / elseif
echo("Example 3: if, elseif, else<BR>\n");
if($age >= 65) { // This block will run if the $age indicates the user is 65 years or older.
  // Advertising and Activities for seniors
  echo ("Welcome to the senior version of this website. Polident is on sale.<br>\n");
} elseif($age >= 19) { // this will only be evaluated if the first if() block did not succeed.
  // Advertising for adults
  echo ("Welcome to the voting age version of this website. Vote Trump.<br>\n");
} else if ($age > 12) { // this will only be evaluated if the any if() or elseif() blocks before it did not succeed.
  // Activities for teenagers
  echo ("Welcome to the teen version of this website. Blah Blah Kardasians. Try this acne cream.<br>\n");
} else { // this is the default behavior block if no previous if(), elseif() conditions succeeded
  // Child safe site
  echo ("Welcome to the child-safe version of this website. Do you know your A,B,C's?<br>\n");
}


// Switch
// switch() is a great structure for making decisions based on a series of known pre-defined values.
// It can only do direct equality comparisons against the same value, so it does not work when you need to compare with operators like > or <=.
// Its syntax is fairly simplistic, but it is also a little different from what you may be used to.
// Note: An if() can always replicate the logic of a switch(), but a switch() cannot always do what an if() can do, so if in doubt use if().

$ageGroup = "Adult";

echo("Example 4: switch/case <BR>\n");
switch($ageGroup) {
  case "Senior": // checks if $ageGroup == "Senior"
    echo ("Welcome to the senior version of this website. Polident is on sale.<br>\n");
    break;
  case "Adult": // checks if $ageGroup == "Adult"
    echo ("Welcome to the voting age version of this website. Vote Trump.<br>\n");
    break;
  case "Teen": // checks if $ageGroup == "Teen"
    echo ("Welcome to the teen version of this website. Blah Blah Kardasians. Try this acne cream.<br>\n");
    break;
  case "Child": // checks if $ageGroup == "Child"
    echo ("Welcome to the child-safe version of this website. Do you know your A,B,C's?<br>\n");
    break;
  default:
    echo ("Not sure how to present this site to you. You did not provide a known $ageGroup.<br>\n");
    break;
}