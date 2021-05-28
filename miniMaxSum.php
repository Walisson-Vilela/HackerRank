<?php

// Complete the miniMaxSum function below.

/***************************************************** */
//Dar uma olhada sobre o que o Array sort faz
// Echo, verificar como o array_pop e array_shift esta agindo sobre o array
/***************************************************** */

function miniMaxSum($arr) {

    function sumMin($minValue){

        sort($minValue);
            
        array_pop($minValue);
        return array_sum($minValue);

    } 
    $returnMin = sumMin($arr); 

    function sumMax($maxValue){
      
        sort($maxValue);
        
        array_shift($maxValue);
        return array_sum($maxValue);

    } 
    $returnMax = sumMax($arr); 
    echo $returnMin. " ". $returnMax;   
    
}


miniMaxSum([1,2,3,4,5]); // [0, 1, 2, 3, 4]
