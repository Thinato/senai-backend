<?php

/*
6
8.0
4.0
10.0
14.0
13.0
7.0
*/

$qtd = (int)readline("Quantos numeros voce vai digitar? ");
$maior = 0;
$posicao = 0;
for ($i = 0; $i < $qtd; $i++) {
    $num = (float)readline("Digite um numero: ");
    if ($num > $maior) {
        $maior = $num;
        $posicao = $i;
    }
}

echo PHP_EOL . "MAIOR VALOR = " . $maior . PHP_EOL;
echo "POSICAO DO MAIOR VALOR = " . $i;