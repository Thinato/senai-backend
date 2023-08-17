<?php

/*
6
8
2
11
14
13
20
*/

$qtd = (int)readline("Quantos numeros voce vai digitar? ");

$pares = array();

for ($i = 0; $i < $qtd; $i++) {
    $num = (int)readline("Digite um numero: ");
    if ($num % 2 == 0) {
        $pares[] = $num;
    }
}
$count = count($pares);
echo PHP_EOL . "NUMEROS PARES:" . PHP_EOL;
for ($i = 0; $i < $count; $i++) {
    echo $pares[$i] . " ";
}
echo PHP_EOL .PHP_EOL. "QUANTIDADE DE PARES = " . $count;