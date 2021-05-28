<?php

function kangaroo($x1, $v1, $x2, $v2) {


    for($i = 0; $x1 >= 0 && $x2 >= 0; $i++){
        $x1 = $x1 + $v1;
        $x2 = $x2 + $v2; 

        if($x2 > $x1 && $v2 > $v1)
        {
            $output = "NO";
            break;
        }elseif($x1 > $x2 && $v1 > $v2)
        {
            $output = "NO";   
            break;

        }elseif($x1 != $x2 && $v1 == $v2)
        {
            $output = "NO"; 
            break; 

        }elseif($x1 == $x2)
        {
            $output = "YES";
            break;
        }  
    }   
    return $output;
}


kangaroo(0,2,5,3);

?>