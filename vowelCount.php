<?php

// Return the number (count) of vowels in the given string.
// We will consider a, e, i, o, u as vowels for this Kata (but not y).
// The input string will only consist of lower case letters and/or spaces.


function getCount($str) {
    $vowelsCount = 0;
    
    $vowels = ['a','e','i','o','u'];
    
    print_r($vowels);
    $words = str_split($str);
    print_r($words);


    foreach ($words as $key => $value) {
        if (false !== array_search($value,$vowels)){
            echo $value;
            $vowelsCount++;
        }
    }

    
    return $vowelsCount;
  }


//   function getCount($str) {;
  
//     return preg_match_all('/[aeiou]/i',$str,$matches);
//   }




  echo "\n";
  echo('5 : '. getCount("abracadabra"));
  echo "\n";






















