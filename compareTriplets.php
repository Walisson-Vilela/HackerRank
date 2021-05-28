<?php

function compareTriplets($a, $b) {
    $alice = 0;
    $bob = 0;

    if($a[0] > $b[0]){
        $alice ++;

    }elseif($a[0] < $b[0]){
        $bob ++;
    }
    if($a[1] > $b[1]){
        $alice ++;
    }elseif($a[1] < $b[1]){
        $bob ++;
    }
    if($a[2] > $b[2]){
        $alice ++;
    }elseif($a[2] < $b[2]){
        $bob ++; 
    }
    
    return [$alice, $bob];
}

$result = compareTriplets([1,2,3], [3,2,1]);
echo $result[0];
echo " ";
echo $result[1];
