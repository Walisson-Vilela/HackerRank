<?php

function birthdayCakeCandles($candles) {

$n = count($candles);
$cont = 0;
$maior = $candles[0];

for($i = 0; $i < $n; $i++){
    if($candles[$i] > $maior){
        $maior = $candles[$i];

    }
}
for($i = 0; $i < $n; $i++){
    if($candles[$i] === $maior){
        $cont ++;

    }
}

return $cont;
/*

 

    $a = array_count_values ($candles); // Fornece a quantidade de elementos que se repetem no array
   

*/

}

birthdayCakeCandles([3,2,1,3, 4 ]);

?> 