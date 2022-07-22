<?php

function positive_sum($a){
return array_sum(array_filter($a,function($n){return $n>0;}));
}

echo "\n";
echo ("Expected: 13 - Result: ".positive_sum([1, -2, 3, 4, 5]));
echo "\n";
echo ("Expected: 9 - Result: ".positive_sum([-1, 2, 3, 4, -5]));
echo "\n";
