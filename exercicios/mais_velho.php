<?php
/*
5
Joao
16
Maria
21
Teresa
15
Carlos
23
Paulo
17
*/

$nomes = array();
$idades = array();

$qtd = (int)readline("Quantas pessoas voce vai digitar? ");

for ($i = 0; $i < $qtd; $i++) {
    echo "Dados da " . ($i+1) . "a pessoa:" . PHP_EOL;
    $nomes[] = readline("Nome: ");
    $idades[] = (int)readline("Idade: ");
}

$max_idade = max($idades);
$max_index = array_search($max_idade, $idades);
$mais_velho = $nomes[$max_index];

echo "PESSOA MAIS VELHA: " . $mais_velho;