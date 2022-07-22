<?php



// The marketing team is spending way too much time typing in hashtags.
// Let's help them with our own Hashtag Generator!

// Here's the deal:

// [x]    It must start with a hashtag (#).
// [x]    All words must have their first letter capitalized.
// [x]   If the final result is longer than 140 chars it must return false.
// [x]    If the input or the result is an empty string it must return false.


function generateHashtag($str) {



    if(ctype_space($str) || empty($str)){
        return false;
    }

 
    $count=0;
    $words = explode(' ',$str);
    foreach ($words as $key => $value) {
    $count += strlen($value);
     $words[$key] = ucfirst($value);

    }
    if($count>139){
        return false;
    } 

    unset($str);
    $str = implode("",$words);



    return "#".$str;
}





$testcount = 0;
function test ($output,$input,$comment=''){
    
    global $testcount;
    $testcount ++;
    if($input == $output){

        echo "Pass ". $testcount . " _ ". $output . "\n";
    }
    else {
        echo "Fail ". $testcount . " _ " . $input . "\n";
    }

}
test(false, generateHashtag(''), 'Expected an empty string to return false');
test(false, generateHashtag(str_repeat(' ', 200)), "Still an empty string");
test(false, generateHashtag('Looooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooong Cat'), 'Should return false if the final word is longer than 140 chars.');
test(false, generateHashtag(str_repeat("a", 140)), "Too long");
test('#Codewars', generateHashtag('Codewars'), 'Should handle a single word and add a hashtag at the beginning.');
test('#Codewars', generateHashtag('Codewars      '), 'Should handle trailing whitespace.');
test('#CodewarsIsNice', generateHashtag('Codewars Is Nice'), 'Should remteste spaces.');
test('#CodewarsIsNice', generateHashtag('codewars is nice'), 'Should capitalize first letters of words.');
test('#CodeWars', generateHashtag('Code' . str_repeat(' ', 140) . 'wars'));
test("#A" . str_repeat("a", 138), generateHashtag(str_repeat("a", 139)),"Should work");