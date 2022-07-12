<?php

function count_smileys($arr): int {
    $num = 0;

    foreach ($arr as $emoji) {
        if(strlen($emoji)>2){
            // tiene nariz
            if (($emoji[0] == ':' || $emoji[0] == ';') && ($emoji[1] == '-' || $emoji[1] == '~') && ($emoji[2] == ')' || $emoji[2] == 'D')){
                $num ++;
            }
            
        } else {
            // no tiene nariz
            if (($emoji[0] === ':' || $emoji[0] === ';') && ($emoji[1] === ')' || $emoji[1] === 'D')){
                $num ++;
            }
        }
        
    }

    return $num;
}



echo "\n-- Tests -- \n";

if(4 == count_smileys([':D',':~)',';~D',':)'])){  echo "Pass #1 \n";} else {echo "Fail! #1 \n";}
if(2 == count_smileys([':)',':(',':D',':O',':;'])){  echo "Pass #2 \n";} else {echo "Fail! #2 \n";}