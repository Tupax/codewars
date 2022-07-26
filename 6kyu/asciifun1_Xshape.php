<?php

// https://www.codewars.com/kata/5906436806d25f846400009b
// You will get an odd integer n (>= 3) and your task is to draw an X. Each line is separated with \n.
// Use the following characters: ■ □ 
// For Ruby, Crystal and PHP: whitespace and o


function x(int $n): string {
	
    //$n indica la cantidad de 3 lineas y el ancho de cada linea.
    
    $xMiddle = round($n/2);
    $xMiddleSpace = round($n/2,0,PHP_ROUND_HALF_DOWN);

    $lvl = '';
    $space = $n -2;
    for ($i=0; $i < $n; $i++) { 
        for($j=0; $j<$n; $j++) {
            if ($i != $xMiddleSpace){
                // $space 
                $lvl .= "-";
            } else {
                if($j != $xMiddleSpace){

                    $lvl .= " ";
                } else {
                    $lvl .= "o";
                }

            }
        }
        $lvl.="\n";
    }

    return $lvl;
}




echo "Expected Output for 3:\r\n";
echo("o o\n o \no o");
echo "\n\nYou returned:\r\n\n";
echo (x(3));

echo "\n\nExpected Output for 5:\r\n";
echo("o   o\n o o \n  o  \n o o \no   o");
echo "\n\nYou returned:\r\n\n";
echo (x(5));

