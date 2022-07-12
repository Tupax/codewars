<?php
// Write a function that will return the count of distinct case-insensitive alphabetic characters and numeric digits that occur more than once in the input string.
// The input string can be assumed to contain only alphabets (both uppercase and lowercase) and numeric digits.

function duplicateCount($text) {
    $text = strtolower($text);
    $a = str_split($text);
    $counter = 0;
    $acounter = [];

    
    for($i=count($a)-1; $i > 0 ; $i--) {

        $char = $a[$i];
        array_pop($a);
      
        if(in_array($char,$a,false)){
           
            if(!in_array($char,$acounter)){
            array_push($acounter,$char);}
        }

        // array_search($a[$i],$a);
    }
    print_r($acounter);

    return count($acounter);
  }
echo "\n-- Tests -- \n";

if(0 == duplicateCount("")){  echo "Pass #1 \n";} else {echo "Fail! #1 \n";}
if(0 == duplicateCount("abcde")){  echo "Pass #2 \n";} else {echo "Fail! #2 \n";}
if(2 == duplicateCount("aabbcde")){  echo "Pass #3 \n";} else {echo "Fail! #3 \n";}
if(2 == duplicateCount("aabBcde")){  echo "Pass #4 \n";} else {echo "Fail! #4 \n";}
if(1 == duplicateCount("Indivisibility")){  echo "Pass #5 \n";} else {echo "Fail! #5 \n";}
if(2 == duplicateCount("Indivisibilities")){  echo "Pass #6 \n";} else {echo "Fail! #6 \n";}

