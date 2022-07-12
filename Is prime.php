<?php
// Define a function that takes an integer argument and returns a logical value true or false depending on if the integer is a prime.
// Per Wikipedia, a prime number ( or a prime ) is a natural number greater than 1 that has no positive divisors other than 1 and itself.

function is_prime(int $n): bool {
if($n <=0){
    return false;
} else{
    $cont =0;
    for ($i=1; $i <= $n; $i++) {
        if ($n % $i==0) $cont = $cont + 1;
     }
     if ($cont ==2){return true;}
     else return false;

}
}

echo "\n-- Tests -- \n";

if(false == is_prime(0)){  echo "Pass #1 \n";} else {echo "Fail! #1 \n";}
if(false == is_prime(1)){  echo "Pass #2 \n";} else {echo "Fail! #2 \n";}
if(true == is_prime(2)){  echo "Pass #3 \n";} else {echo "Fail! #3 \n";}
if(true == is_prime(5)){  echo "Pass #4 \n";} else {echo "Fail! #4 \n";}
$startTime = microtime(true);  
if(false == is_prime(1853606873)){  echo "Pass #5 \n";} else {echo "Fail! #5 \n";}
$endTime = microtime(true);  
$elapsed = $endTime - $startTime;
echo "Execution time : $elapsed seconds \n";
