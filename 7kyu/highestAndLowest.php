<?php

// In this little assignment you are given a string of space separated numbers, and have to return the highest and lowest number.


// function highAndLow($numbers)
// {
//     $n=explode(' ',$numbers);
//     $min = min($n);
//     $max = max($n);

//   return $max." ".$min;
// }
function highAndLow($numbers)
{
    $n=explode(' ',$numbers);
  return max($n)." ".min($n);
}



echo "\n";
echo('5 1 : '. highAndLow("1 2 3 4 5"));
echo "\n";
echo('5 -3 : '. highAndLow("1 2 -3 4 5"));
echo "\n";
echo('9 -5 : '. highAndLow("1 9 3 4 -5"));
echo "\n";