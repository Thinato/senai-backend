<?php

$loop = (int)readline("Quantas pessoas serao digitadas? ");

$maior = 0;
$menor = 0;

$homens = 0;
$altura_mulheres = 0;
for ($i = 0; $i < $loop; $i++){
    $altura = (float)readline("Altura da " . ($i+1) . "a pessoa: ");
    if ($altura > $maior) {
        $maior = $altura;
    }
    if ($menor == 0 || $altura < $menor) {
        $menor = $altura;
    }
    $genero = readline("Genero da " . ($i+1) . "a pessoa: ");
    
    if (strtoupper($genero) == "M"){
        $homens++;
    }
    else if (strtoupper($genero) == "F"){
        $altura_mulheres += $altura;
    }
}

echo "Menor altura = " . number_format($menor, 2) . PHP_EOL;
echo "Maior altura = " . number_format($maior, 2) . PHP_EOL;
echo "Media das alturas das mulheres = " . number_format($altura_mulheres / ($loop - $homens), 2) . PHP_EOL;
echo "Numero de homens = " . $homens;
