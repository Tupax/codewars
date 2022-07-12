<?php
// This is a function I wrote to find all occurrences of a string, using strpos recursively.

function strpos_recursive($haystack, $needle, $offset = 0, &$results = array()) {               
    $offset = strpos($haystack, $needle, $offset);
    if($offset === false) {
        return $results;           
    } else {
        $results[] = $offset;
        return strpos_recursive($haystack, $needle, ($offset + 1), $results);
    }
}


//This is how you use it:


$string = 'This is some string with some a in the area';
$search = 'a';
$found = strpos_recursive($string, $search);

if($found) {
    foreach($found as $pos) {
        echo 'Found "'.$search.'" in string "'.$string.'" at position '.$pos."\n";
    }   
} else {
    echo '"'.$search.'" not found in "'.$string.'"';
}
?>