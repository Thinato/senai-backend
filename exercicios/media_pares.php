<?php
/* case 1
6
8
2
11
14
13
20
*/

/* case 2
3
7
9
11
*/
$qtd = (int)readline("Quantos elementos vai ter o vetor? ");
$pares = array();

for ($i = 0; $i < $qtd; $i++) {
    $num = (int)readline("Digite um numero: ");
    if ($num % 2 == 0) {
        $pares[] = $num;
    }
}
$soma = array_sum($pares);
$count = count($pares);
if ($count > 0) {
    $media = $soma / $count;
    echo "MEDIA DOS PARES = " . number_format($media, 1);
} else {
    echo "NENHUM NUMERO PAR";
}