<?php 
// We are to draw a pie chart! Our parameter shall be given in JSON.

// The goal of this kata is to return a JSON containing each key with it corresponding angle to two decimal places when necessary.
// Example

//     Parameter {"Hausa": 4, "Yoruba" : 5, "Igbo" : 6, "Efik" : 1, "Edo" : 4} should return a JSON like {"Hausa":72,"Yoruba":90,"Igbo":108,"Efik":18,"Edo":72}
//     Parameter {"English": 4, "Polish" : 12, "Russian" : 10, "Spanish" : 2} should return a JSON like {"English":51.43,"Polish":154.29,"Russian":128.57,"Spanish":25.71}
//     Parameter {"Android": 500, "iOS" : 270, "Microsoft" : 230} should return a JSON like {"Android":180,"iOS":97.2,"Microsoft":82.8}



function pieChart($obj)
{
    $json = '{"key":value}';
	  return $json;
}

echo "\n";
echo('{"Hausa":72,"Yoruba":90,"Igbo":108,"Efik":18,"Edo":72} --- '. pieChart('{"Hausa": 4, "Yoruba" : 5, "Igbo" : 6, "Efik" : 1, "Edo" : 4}'));
echo "\n";
echo('{"English":51.43,"Polish":154.29,"Russian":128.57,"Spanish":25.71} --- '. pieChart('{"English": 4, "Polish" : 12, "Russian" : 10, "Spanish" : 2}'));
echo "\n";
echo('{"Android":180,"iOS":97.2,"Microsoft":82.8} --- ' . pieChart('{"Android": 500, "iOS" : 270, "Microsoft" : 230}'));
echo "\n";