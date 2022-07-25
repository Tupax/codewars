<?php

// Write function heron which calculates the area of a triangle with sides a, b, and c (x, y, z in COBOL).

// Heron's formula:
// s∗(s−a)∗(s−b)∗(s−c)\sqrt
// ​

// where
// s=a+b+c2s = \frac{a + b + c} 2s=2a+b+c​

// Output should have 2 digits precision.


// 2 funciones para redondear.
// number_format()
// round()

function heron($a, $b, $c)
{
    $s= (($a+$b+$c)/2);
    $t = ($s*($s-$a))*($s-$b)*($s-$c);
    return round(sqrt($t),2);
    return number_format(sqrt($t),2,".","");
    // return round(sqrt(($s*($s-$a))*($s-$b)*($s-$c)),2);
}

function heron1($a, $b, $c)
{
    $s= (($a+$b+$c)/2);
    return round(sqrt(($s*($s-$a))*($s-$b)*($s-$c)),2);
}

echo(heron(3, 4, 5)." : 6");
echo "\n";
echo(heron(6, 8, 10)." : 24");   
echo "\n";