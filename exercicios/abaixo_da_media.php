<?php

/*
4
10
15.5
13.2
9.8
*/

$qtd = (int)readline("Quantos elementos vai ter o vetor? ");

$numeros = array();
for ($i = 0; $i < $qtd; $i++){
    $numeros[] = (float)readline("Digite um numero: ");
}

$soma = array_sum($numeros);
$count = count($numeros);
$media = $soma / $count;

echo "MEDIA DO VETOR = " . number_format($media, 3) . PHP_EOL;
echo "ELEMENTOS ABAIXO DA MEDIA:" . PHP_EOL;
foreach ($numeros as $num) {
    if ($num < $media) echo $num . PHP_EOL;
}