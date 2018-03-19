<?php

// Logical operators
// - work on multiple boolean (true or false) values to produce a new boolean

echo "Ex 1 (&&): " . (true && true) . "<br>\n";  // And / &&
echo "Ex 2 (||): " . (true || false) . "<br>\n"; // Or / ||
echo "Ex 3 (!): " . (!true) . "<br>\n";       // Not / !

// And / &&
// both sides of the operator must be true for the expression to evaluate to true.

echo "Ex 4: " . (true && true) . "<br>\n";  // true
echo "Ex 5: " . (true && false) . "<br>\n"; // false
echo "Ex 6: " . (false && true) . "<br>\n"; // false
echo "Ex 7: " . (false && false) . "<br>\n"; // false

echo "Ex 8: " . (23 > 10 && 23 < 45) . "<br>\n"; // true && true >> true
echo "Ex 9: " . (65 > 10 && 65 < 45) . "<br>\n"; // true && false >> false

// Mostly used for complex conditions in decision making
// example, checking that a person is between 10 and 45 years of age
$age = 23;
if($age > 10 && $age < 45) { 
  // Since $age was set to 23 this code block would run,
  // if it were 65, this block would not run.
  echo "<BR> Valid age <BR><BR>\n";
}

// Or / || 
// one or both sides of the operator must be true for the expression to evaluate to true.

echo "Ex 10. " . (true || true) . "<br>\n";   // true
echo "Ex 11. " . (true || false) . "<br>\n";  // true
echo "Ex 12. " . (false || true) . "<br>\n";  // true
echo "Ex 13. " . (false || false) . "<br>\n"; // false

echo "Ex 14. " . (23 > 10 || 23 < 45) . "<br>\n";        // true || true >> true
echo "Ex 15. " . (65 > 10 || 65 < 45) . "<br>\n";        // true || false >> true
echo "Ex 16. " . ("a" == "b" || "b" == "c") . "<br>\n";  // false || false >> false

// Also used for complex decision making
// example, if a person is a member or if they are 65 or over they get a discount.
$isMember = false;
$age = 70;
if($isMember == true || $age >= 65) {
  // Not a member, but they are over 65 years old, so this code should run
  echo "<br>  Discount  <br><br>\n";
}


// Not / !
// Inverts boolean values, true becomes false, false becomes true
// Nearly equivalent to saying "is not" in English, though it might not read that way directly.

echo "Ex 17. " . (!true) . "<br>\n"; // false
echo "Ex 18. " . (!false) . "<br>\n"; // true

echo "Ex 19. " . (!(65 < 45)) . "<br>\n"; // !(false) >> true (65 is not less than 45)
echo "Ex 20. " . (!(45 < 65)) . "<br>\n"; // !(true) >> false (45 is less than 65, the not operator reverses it to become false)

// If you have trouble with the ! operator, you can often invert any related conditional operators to 
// make a bit more sense. Just don't forget to invert equality too.
// For example: 
echo "Ex 21. " . (!(45 < 65)) . "<br>\n";  // Using not operator
echo "Ex 22. " . (45 >= 65) . "<br>\n";   // equivalent without not operator