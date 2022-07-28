<?php



// Write a function, persistence, that takes in a positive parameter num and returns its multiplicative persistence, which is the number of times you must multiply the digits in num until you reach a single digit.

// For example (Input --> Output):

// 39 --> 3 (because 3*9 = 27, 2*7 = 14, 1*4 = 4 and 4 has only one digit)
// 999 --> 4 (because 9*9*9 = 729, 7*2*9 = 126, 1*2*6 = 12, and finally 1*2 = 2)
// 4 --> 0 (because 4 is already a one-digit number)

function persistence(int $num): int {
    
    $times = 0;

    $digits = str_split($num);

    for ($i=0; 1 < count($digits); $i++) { 
        
        $multl=1;
        for ($j=0; $j < count($digits) ; $j++) { 
            $multl *= $digits[$j];
        }
        unset($digits);
        $digits = str_split($multl);
        $times = $i+1;
    }

    return $times;
  }
  echo "\n";
echo("3 : ".  persistence(39));
echo "\n";
echo("4 : ".  persistence(999));
echo "\n";
echo("0 : ".  persistence(4));
echo "\n";



// Others solutions

// function persistence(int $num): int {
//     $count = 0;
//     while ($num > 9) {
//       $num = array_product(str_split($num));
//       $count++;
//     }
    
//     return $count;
//   }