<?php

function getTotalX($a, $b) {
    //Os elementos da primeira matriz são todos fatores do inteiro que está sendo considerado.
    //O inteiro sendo considerado é um fator de todos os elementos da segunda matriz

    $minA = min($a);
    $maxB = max($b);
    $cont_inteiros = 0;

    for ($i = $minA; $i <= $maxB; $i++)
    {
        $cont_condicoes = 0;
        $m = 0;

        while ($m < count($b))
        {
            $n = 0;

            while ($n < count($a))
            {
                if (($i % $a[$n] == 0) && ($b[$m] % $i == 0))
                {
                    $cont_condicoes++;
                }
                $n++;
            }
            $m++;
        }
        if ($cont_condicoes == count($a) * count($b))
        {
            $cont_inteiros++;
        }
    }
    return $cont_inteiros;
}

echo getTotalX([2, 4], [16, 32, 96])."\n";

        /*
       do
        {
            if($n < count($a))
            {
                if($i % $a[$n] == 0) 
                {
                    $cont_inteiros++;
                    echo "i = $i \n";
                    echo "n = $n \n";
                    echo "a[n] = {$a[$n]} \n";
                } 
                $n++;
            }
            else{
                break;
            }

            if($m < count($b))
            {
                if($b[$m] % $i == 0)
                {
                    $cont_inteiros++;
                    echo "i = $i \n";
                    echo "m = $m \n";
                    echo "b[m] = {$b[$m]} \n";
                }
                $m++;
            }
            else{
                break;
            } 
        }while($n >= 0 && $m >=0);



            while($n < count($a)) // 0 [2] -> 1 [2]
            {
                if($i % $a[$n] == 0) // i = 2[0] = 2
                {
                    $cont_inteiros++;
                }
            $n++; // n passa para 1
            } 
            
            while($m < count($b))
            {
                if($i % $b[$m] == 0)
                { 
                    $cont_inteiros++; 
                }
            
            $m++; 
            }


    $n = 0;
    $m = 0;
    $minA = min($a);
    $maxB = max($b);
    $cont_inteiros = 0; // Contagem de inteiros

    for($i = $minA; $i <= $maxB; $i++) //Faz percorrer todos os elementos dos arrays 2 - 96 i++
    { 
        do
        {
            if($n < count($a) )
            {
                if($i % $a[$n] == 0)  // i = 2[0] = 2
                {
                    $cont_inteiros++;
                } 
            }if($m < count($b))
            {
                if($b[$m] % $i == 0) // i = 2[0] = 2
                {
                    $cont_inteiros++;
                }
            }
        $n++;
        $m++;    
        } while ($n < count($a) && ($m < count($b)));
        
    }
    return $cont_inteiros;



     

*/
?>