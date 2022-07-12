<?php

declare(strict_types=1);


// Write a function that takes in a string of one or more words, and returns the same string, but with all five or more letter words reversed 
// (Just like the name of this Kata). Strings passed in will consist of only letters and spaces.
// Spaces will be included only when more than one word is present.

function spinWords(string $str): string
{
    $r_str = "";

    // Find numeric position of first occurrence 
    // $pos = strpos($name, 'k'); # 2

    // Returns portion of string (offset / length)
    // echo substr($name, 0, $pos); # Mi 

    $e_strl = explode(" ", $str);
    foreach ($e_strl as $word) {
        if (strlen($word) >= 5) {
            for ($i = strlen($word) - 1; $i >= 0; $i--) {
                $r_str .= $word[$i];
            }
        } else {
            $r_str .= $word;
        }
        $r_str .= " ";
    }
    $r_str = rtrim($r_str);

    return $r_str;
}

print_r(spinWords("Welcome")."\n");
print_r(spinWords("Hey fellow warriors"));

echo "\n-- Tests -- \n";

if ("emocleW" == spinWords("Welcome")) {
    echo "Pass #1 \n";
} else {
    echo "Fail! \n";
}
if ("Hey wollef sroirraw" == spinWords("Hey fellow warriors")) {
    echo "Pass #2 \n";
} else {
    echo "Fail! \n";
}
