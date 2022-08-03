<?php
// Complete the function/method (depending on the language) to return true/True 
// when its argument is an array that has the same nesting structures and same corresponding length of nested arrays as the first array.


// https://www.php.net/manual/en/function.array-diff-assoc.php


function same_structure_as(array $a, array $b): bool
{
    $diff = array_diff_assoc_recursive($a,$b);
    // var_dump($diff);
    if (empty($diff)){
        return 1;
    } else {return 0;}
}

function array_diff_assoc_recursive($array1, $array2)
{
    foreach($array1 as $key => $value)
    {
        if(is_array($value))
        {
              if(!isset($array2[$key]))
              {
                  $difference[$key] = $value;
              }
              elseif(!is_array($array2[$key]))
              {
                  $difference[$key] = $value;
              }
              else
              {
                  $new_diff = array_diff_assoc_recursive($value, $array2[$key]);
                  if($new_diff != FALSE)
                  {
                        $difference[$key] = $new_diff;
                  }
              }
          }
          elseif(!array_key_exists($key, $array2))
          {
              $difference[$key] = $value;
          }
    }
    return !isset($difference) ? 0 : $difference;
} 



echo ("True = " . (same_structure_as([1, 1, 1], [2, 2, 2])));
echo "\n";
echo ("True = " . same_structure_as([1, [1, 1]], [2, [2, 2]]));
echo "\n";
echo ("False = " . same_structure_as([1, [1, 1]], [[2, 2], 2]));
echo "\n";
echo ("False = " . same_structure_as([1, [1, 1]], [[2], 2]));
echo "\n";
echo ("True = " . same_structure_as([[[], []]], [[[], []]]));
echo "\n";
echo ("False = " . same_structure_as([[[], []]], [[1, 1]]));
echo "\n";




// Option 1/
// function same_structure_as(array $a, array $b): bool {
//   array_walk_recursive($a, function(&$v, $k) { $v = 1;});
//   array_walk_recursive($b, function(&$v, $k) { $v = 1;});
  
//   return serialize($a) == serialize($b);
// }


// Option 2
// function changeValue(&$item){      
//     $item = 2;
// }

// function same_structure_as(array $a, array $b): bool {
  
// array_walk_recursive($a, 'changeValue');
// array_walk_recursive($b, 'changeValue');

     
//  return ($a === $b);
// }