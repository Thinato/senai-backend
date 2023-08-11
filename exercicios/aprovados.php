<?php
/* INPUT
4
Joao Silva
7
8.5
Maria Teixeira
9.2
6.5
Carlos Carvalho
5
6
Teresa Pires
5.5
6.5
*/

$loop = (int)readline("Quantos alunos serao digitados? ");

$aprovados = array();

class Aluno {
    public $notas;
    public $nome;
    public function __construct($nome, ...$notas) {
        $this->nome = $nome;
        $this->notas = $notas;
    }
    public function get_media(): float {
        $total = array_sum($this->notas);
        $count = count($this->notas);
        $media = $total / $count;
        return $media;
    }
}

for ($i = 0; $i < $loop; $i++) {
    echo "Digite nome, primeira e segunda nota do " . ($i+1) ."o aluno:" . PHP_EOL;
    $nome = readline();
    $nota1 = (float)readline();
    $nota2 = (float)readline();

    $aluno = new Aluno($nome, $nota1, $nota2);
    if ($aluno->get_media() >= 6){
        $aprovados[] = $aluno;
    }
}

echo "Alunos aprovados: ";
foreach ($aprovados as $aluno) {
    echo $aluno->nome . PHP_EOL;  
}