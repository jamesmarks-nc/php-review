<?php

// Comparison operators
echo "Comparison Operators: <BR>\n";
echo "1. " . (3 < 4) . "<br>\n";    // true
echo "2. " . (4 < 3) . "<br>\n";    // false
echo "3. " . (4 > 3) . "<br>\n";    // true
echo "4. " . (3 > 4) . "<br>\n";    // false
echo "5. " . (3 == 4) . "<br>\n";   // false
echo "6. " . (3 == 3) . "<br>\n";   // true
echo "7. " . (3 != 4) . "<br>\n";   // true
echo "8. " . (3 != 3) . "<br>\n";   // false

// compound comparison operators
// "greater than or equal to"
echo "9. " . (3 >= 3) . "<br>\n";   // true
echo "10. " . (3 >= 4) . "<br>\n";   // false
// "less than or equal to"
echo "11. " . (3 <= 3) . "<br>\n";   // true
echo "12. " . (4 <= 3) . "<br>\n";   // false

// type safe comparison operators
// using standard equality operator
echo "13. " . (1 == 1) . "<br>\n";    // true
echo "14. " . (1 == "1") . "<br>\n";  // true
// using type safe equality operator
echo "15. " . (1 === 1) . "<br>\n";   // true
echo "16. " . (1 === "1") . "<br>\n"; // false
// using standard inequality operator
echo "17. " . (1 != 1) . "<br>\n";    // false
echo "18. " . (1 != "1") . "<br>\n";  // false
// using type safe inequality operator
echo "19. " . (1 !== 1) . "<br>\n";   // false
echo "20. " . (1 !== "1") . "<br>\n"; // true