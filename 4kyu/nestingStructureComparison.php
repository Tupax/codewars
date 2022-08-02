<?php
// Complete the function/method (depending on the language) to return true/True 
// when its argument is an array that has the same nesting structures and same corresponding length of nested arrays as the first array.


function same_structure_as(array $a, array $b): bool {
    // Your code here
  }


echo ("True = ".same_structure_as([1, 1, 1], [2, 2, 2]));
echo ("True = ".same_structure_as([1, [1, 1]], [2, [2, 2]]));
echo ("False = ".same_structure_as([1, [1, 1]], [[2, 2], 2]));
echo ("False = ".same_structure_as([1, [1, 1]], [[2], 2]));
echo ("True = ".same_structure_as([[[], []]], [[[], []]]));
echo ("False = ".same_structure_as([[[], []]], [[1, 1]]));