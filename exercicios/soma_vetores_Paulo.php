<?php

/*
6
8
2
11
14
13
20
5
10
3
1
10
7
*/

$qtd_vetores = 2;
$qtd = (int)readline("Quantos valores vai ter cada vetor? ");
$loop = $qtd_vetores * $qtd;

$vetor = array_fill(0, $qtd, 0);

for ($i = 0; $i < $loop; $i++) {
    if ($i % $qtd == 0) {
        $char = (int)(65 + ($i / $qtd));
        echo "Digite os valores do vetor ". chr($char) .":" . PHP_EOL;
    }
    $j = $i % $qtd;
    $vetor[$j] += (float)readline();
}
    