<?php 

function toWeirdCase($string) {
    $newarr = [];
    
    $arr = explode(" ",$string);

    
foreach ($arr as $k => $word) {

    for ($i=0; $i < strlen($word); $i++) { 
        //         $word[$i] = ($i % 2 === 0) ? strtoupper($word[$i]) : strtolower($word[$i]);
        
        if($i % 2 ==0 ){
            $word[$i] = strtoupper($word[$i]); 
            // echo $word[$i] = "p"; 
        } else {
            $word[$i] = strtolower($word[$i]); 
            // echo $word[$i] = "I"; 
            // echo $word[$i] = "I"; 
        }

    
    } 

    array_push($newarr,$word);
    }

return implode(" ",$newarr);
}





echo "\n-- Tests -- \n";

$r1 = toWeirdCase('Hello world foo bar baz');
$r2 = toWeirdCase('wEll i GuesS you passed');
// echo $r1;
if('HeLlO WoRlD FoO BaR BaZ' == $r1){  echo "Pass #1 \n";} else {echo "Fail! #1 \n";}

// echo $r2;
if('WeLl I GuEsS YoU PaSsEd' == $r2){  echo "Pass #2 \n";} else {echo "Fail! #2 \n";}

