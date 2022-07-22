<?php
// A beer can pyramid will square the number of cans in each level - 1 can in the top level, 4 in the second, 9 in the next, 16, 25...
// Complete the beeramid function to return the number of complete levels of a beer can pyramid you can make,
//  given the parameters of: (your referral bonus, and the price of a beer can)

// For example:
// beeramid(1500, 2); // should === 12
// beeramid(5000, 3); // should === 16

// *
// ****
// *********
// ****************
// *************************

function beeramidFirst($bonus, $price) {
  
    $level = 0;
    $beer = $bonus / $price;
    // echo $beer." >\n";

    while ($beer >1) {
        if($level==0){$level++;}
        // echo "while "."\n";
        $floorAmount = $level*$level;
        if($beer >= $floorAmount){
            $level++;
            $beer = $beer - $floorAmount;
        } else {
            $beer = 0;
        }
        
        // echo $beer," >\n";
        
    }

    return $level;
//contar la cantidad de cervezas totales 
}


function beeramidSecond($bonus, $price) {  
$level = 0;
$beer = $bonus / $price;
for ($l=0; $beer > 1; $l++) { 
    $floorAmount = $l*$l;
    
    
    if($beer >= $floorAmount){
        $beer = $beer - $floorAmount;
        if($beer == 0) {$level = $l;}
    } else {
        // echo "no more beer";
        $beer = 0;
        $level = $l-1;
    }

}
return $level;
}

function beeramid($bonus,$price){

//compro cervezas
    $beer =$bonus / $price;
    echo "Puedo comprar ". $beer . " cervezas \n";

    if ($beer <= 0 ){
        return 0;
    }
// empiezo a crear la piramide invertida

$floor = 1;
while ($beer > 0) {
    $gastoPorpiso = $floor * $floor;
    if ($beer >= $gastoPorpiso){
        $beer = $beer - $gastoPorpiso;
        $floor++;
    } else {
        break;
    }
}
return $floor-1;
}


echo "\n";
echo('1 : '. beeramid(9, 2));
echo "\n";
echo('3 : '. beeramid(21, 1.5));
echo "\n";
echo('0 : '. beeramid(-1, 4));


// ALternativa en la web
// function beeramid($bonus, $price) {
//     $level = 0;
//     while(($bonus - $price * ($level+1)**2) >= 0) {
//       $bonus = $bonus - $price * ($level+1)**2;
//       $level++;
//     }
//     return $level;
//   }