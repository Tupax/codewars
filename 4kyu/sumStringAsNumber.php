<?php

// Given the string representations of two integers, return the string representation of the sum of those integers.
// For example:
// sumStrings('1','2') // => '3'
// A string representation of an integer will contain no characters besides the ten numerals "0" to "9".


function sum_strings($a, $b) {
    
    $sum = (int)($a) + (int)($b);
    return (string)($sum);

  }

  echo "\n";
  echo('579 : '. sum_strings('123', '456'));
  echo "\n";

//   Failed asserting that two strings are identical.
// Expected: '712577413488402631964821329'
// Actual  : '7.125774134884E+26'