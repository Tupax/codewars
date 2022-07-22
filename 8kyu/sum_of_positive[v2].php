<?php

function positive_sum($a){
$sum = 0;

foreach ($a as $k => $v) {
    $sum += $v > 0 ? $v : 0;
}
return $sum;

}

echo "\n";
echo ("Expected: 13 - Result: ".positive_sum([1, -2, 3, 4, 5]));
echo "\n";
echo ("Expected: 9 - Result: ".positive_sum([-1, 2, 3, 4, -5]));
echo "\n";
