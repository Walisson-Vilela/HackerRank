<?php

/*
 * Complete the 'diagonalDifference' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts 2D_INTEGER_ARRAY arr as parameter.
 */

function diagonalDifference($arr) {
    
    $n = count($arr);
    $firstDiagonal = 0;
    $secondDiagonal = 0;

    for ($i = 0, $j = ($n - 1) ; $i <= ($n - 1) && $j >= 0; $i++, $j--) {
        $firstDiagonal += $arr[$i][$i];
        $secondDiagonal += $arr[$i][$j];
    }

    // $firstDiagonal = $arr[0][0] + $arr[1][1] + $arr[2][2];
    // $secondDiagonal = $arr[2][0] + $arr[1][1] + $arr[0][2];

    return abs($firstDiagonal - $secondDiagonal);

}

diagonalDifference([[11,2,4],[4,5,6],[10,8,-12]]);
