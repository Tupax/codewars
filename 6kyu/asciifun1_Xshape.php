<?php

// https://www.codewars.com/kata/5906436806d25f846400009b
// You will get an odd integer n (>= 3) and your task is to draw an X. Each line is separated with \n.
// Use the following characters: ■ □ 
// For Ruby, Crystal and PHP: whitespace and o


function x(int $n): string {
	
    //$n indica la cantidad de 3 lineas y el ancho de cada linea.
    
    $middle = round($n/2,0,PHP_ROUND_HALF_DOWN);
    $draw = '';
    for ($i=0; $i < $n; $i++) { 
        for($j=0; $j<$n; $j++) {
            if ($i != $middle){
                $distfromcenter = abs($middle-$i);
                if(($j+$distfromcenter==$middle) || ($j-$distfromcenter)==$middle){
                    $draw .= "o";
                } 
                else{
                    $draw .= " ";
                }
            } else {
                if($j != $middle){

                    $draw .= " ";
                } else {
                    $draw .= "o";
                }
            }
        }
        if ($i<$n-1)$draw.="\n";
    }
    return $draw;
}




echo "Expected Output for 3:\r\n";
echo("o o\n o \no o");
echo "\n\nYou returned:\r\n\n";
echo (x(3));

echo "\n\nExpected Output for 5:\r\n";
echo("o   o\n o o \n  o  \n o o \no   o");
echo "\n\nYou returned:\r\n\n";
echo (x(5));


// Other options
// function x(int $n): string {
//     $str = '';
  
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = 0; $j < $n; $j++) {
//             $str .= (($i === $j) || ($n - 1 - $i === $j)) ? 'o' : ' ';
//         }
//         $str .= "\n";
//     }
    
    
//     return substr($str, 0, -1);
//   }