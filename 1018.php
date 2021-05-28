<?php

/*Leia um valor inteiro. A seguir, calcule o menor número de notas possíveis (cédulas) no qual o valor pode ser decomposto. As notas consideradas são de 100, 50, 20, 10, 5, 2 e 1. A seguir mostre o valor lido e a relação de notas necessárias.

Entrada
O arquivo de entrada contém um valor inteiro N (0 < N < 1000000).

Saída
Imprima o valor lido e, em seguida, a quantidade mínima de notas de cada tipo necessárias, conforme o exemplo fornecido. Não esqueça de imprimir o fim de linha após cada linha, caso contrário seu programa apresentará a mensagem: “Presentation Error”.
*/

$valor = 576;
$troco = $valor;
$qtnotas = floor($troco / 100);
echo "$qtnotas nota(s) de R$ 100,00";
$troco = $troco % 100;
$qtnotas = floor($troco / 50);
$troco = $troco % 50;
echo "$qtnotas nota(s) de R$ 50,00";
$qtnotas = floor($troco / 20);
$troco = $troco % 20;
echo "$qtnotas nota(s) de R$ 20,00";
$qtnotas = floor($troco / 10);
$troco = $troco % 10;
echo "$qtnotas nota(s) de R$ 10,00";
$qtnotas = floor($troco / 5);
$troco = $troco % 5;
echo "$qtnotas 1 nota(s) de R$ 5,00";
$qtnotas = floor($troco / 2);
$troco = $troco % 2;
echo "$qtnotas nota(s) de R$ 2,00";
$qtnotas = floor($troco / 1);
$troco = $troco % 1;
echo "$qtnotas nota(s) de R$ 1,00";

?>