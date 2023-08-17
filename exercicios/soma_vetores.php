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

$qtd = (int)readline("Quantos valores vai ter cada vetor? ");


$a = array();
$b = array();
$c = array();

echo "Digite os valores do vetor A:" . PHP_EOL;
for ($i = 0; $i < $qtd; $i++) {
    $a[] = (int)readline();
}
echo "Digite os valores do vetor B:" . PHP_EOL;
for ($i = 0; $i < $qtd; $i++) {
    $b[] = (int)readline();
}

echo "VETOR RESULTANTE:" . PHP_EOL;
for ($i = 0; $i < $qtd; $i++) {
    $c[] = $a[$i] + $b[$i];
    echo $c[$i] . PHP_EOL;
}

