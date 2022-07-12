<?php 

// Write a function that accepts an array of 10 integers (between 0 and 9), that returns a string of those numbers in the form of a phone number.
// createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns "(123) 456-7890"
// The returned format must be correct in order to complete this challenge.
// Don't forget the space after the closing parentheses!

function createPhoneNumber($numbersArray) {

    $num = "(";
    $num .= implode("",array_slice($numbersArray,0,3));
    $num .= ") ";
    
    $num .= implode("",array_slice($numbersArray,3,3));
    $num .= "-";
    $num .= implode("",array_slice($numbersArray,6,4));

    echo $num;
    return $num;
}


  echo "\n-- Tests -- \n";

if (createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9, 0]) == '(123) 456-7890') {
    echo "Pass #1 \n";
} else {
    echo "Fail! \n";
}
if (createPhoneNumber([1, 1, 1, 1, 1, 1, 1, 1, 1, 1]) == '(111) 111-1111') {
    echo "Pass #2 \n";
} else {
    echo "Fail! \n";
}
// if (countBits(10) == 2) {
//     echo "Pass #2 \n";
// } else {
//     echo "Fail! \n";
// }
