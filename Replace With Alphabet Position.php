

<?php
/*

In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc.
Example

alphabet_position("The sunset sets at twelve o' clock.")

Should return "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11" ( as a string )
*/


function alphabet_position(string $s): string
{

    $s = strtolower($s);

    $pos = '';

    $letters = range('a', 'z');

    $chars = str_split($s);
    foreach ($chars as $c) {
        if (!ctype_alpha($c)) {
            continue;
        }

        $pos .= array_search($c, $letters) + 1;
        $pos .= ' ';
    }
    $pos = trim($pos);


    return $pos;
}

echo "TEST -> \n";
echo "20 8 5 19 21 14 19 5 20 19 5 20 19 1 20 20 23 5 12 22 5 15 3 12 15 3 11\n";
echo "Result -> \n";
echo alphabet_position("The sunset sets at twelve o' clock.");
echo "\n";
