<?php

$qtd = (int)readline("Quantas pessoas serao digitas? ");

$nomes = array();
$idades = array();
$alturas = 0;

for ($i = 0; $i < $qtd; $i++) {
    echo "Dados da " . ($i+1) . "a pessoa:" . PHP_EOL;
    $nomes[] = readline("Nome: ");
    $idades[] = (int)readline("Idade: ");
    $alturas += (float)readline("Altura: ");
}

$med_alturas = $alturas / $qtd;
echo "Altura média: " . $med_alturas . PHP_EOL;
echo "Pessoas com menos de 16 anos:"

