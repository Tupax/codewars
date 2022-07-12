
<?php
// # Tribonacci Sequence

function tribonacci($signature, $n,$sequence = []) {

//   $sequence = [];
  
if ($n == 0){
    echo $sequence,"\n";
    return $sequence;
  } else if (count($sequence)<=3 && $n <=3){
      for ($i=$n;$i >=1 ; $i--) { 
        array_unshift($sequence,$signature[$i-1]);        
      }    
    
    return $sequence;
  }else if( $n>3){

   
    if(count($sequence)<3){
    while(count($sequence)<3){
        foreach ($signature as $key => $s) {
            array_push($sequence,$s);
        }
    }}
    if($n==4){
        $newNum = $signature[0]+$signature[1]+$signature[2];
        array_push($sequence,$newNum);
        return $sequence;
        
    }
    
    $newNum = $signature[0]+$signature[1]+$signature[2];
    array_push($sequence,$newNum);


    $signature[0]= $signature[1];
    $signature[1]= $signature[2];
    $signature[2]= $newNum;



    return tribonacci($signature,$n-1,$sequence);

    
    
    
  }


}

if ( [1,1,1,3,5,9,17,31,57,105] == tribonacci([1,1,1],10) ){
    Echo "Test Pass #1\n";
} else {
    echo "Test FAIL #1\n";
    print_r(tribonacci([1,1,1],10)); 

}

if ( [1] == tribonacci([1,1,1],1) ){
    Echo "Test Pass #2 \n";
} else {
    echo "Test FAIL #2 \n";

}

if ( [1,2] == tribonacci([1,2,1],2) ){
    Echo "Test Pass #3 \n";
} else {
    echo "Test FAIL #3 \n";

}  
if ( [3,2,1,6] == tribonacci([3,2,1],4) ){
    Echo "Test Pass #4 \n";
} else {
    echo "Test FAIL #4 \n";

}   

if ( [3,2,1,6,9] == tribonacci([3,2,1],5) ){
    Echo "Test Pass #5 \n";
    
} else {
    echo "Test FAIL #5 \n";
    var_dump(tribonacci([3,2,1],5)); 

}   
