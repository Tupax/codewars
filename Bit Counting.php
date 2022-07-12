<?php

// Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. 
// You can guarantee that input is non-negative.
// Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case

function countBits($n) 
{
    $sum = 0;
    $n = decbin($n);

    for ($i=0; $i < strlen($n); $i++) { 
        if($n[$i]==1){
           $sum++;
        }
    }
    return $sum;
   
}


echo "\n-- Tests -- \n";

if (countBits(0) == 0) {
    echo "Pass #1 \n";
} else {
    echo "Fail! \n";
}
if (countBits(4) == 1) {
    echo "Pass #2 \n";
} else {
    echo "Fail! \n";
}
if (countBits(10) == 2) {
    echo "Pass #2 \n";
} else {
    echo "Fail! \n";
}
