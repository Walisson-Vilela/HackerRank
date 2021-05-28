<?php
function calcularSalario($salario){
    if($salario <= 1903.98){
        echo "Isento";
    }elseif($salario > 1903.99  && $salario <= 2826.65 ){
        echo "7,5%";
        echo "<br/>";
        $aliquota = $salario * (7.5/100);
        $salario = $salario + $aliquota;
        return $salario;
    }
}

echo calcularSalario(2000);