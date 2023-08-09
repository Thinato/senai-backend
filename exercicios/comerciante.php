<?php

$qtd = (int)readline("Serão digitados dados de quantos produtos? ");

class Produto {
    public $nome;
    public $preco_compra;
    public $preco_venda;

    function get_lucro() {
        return ($this->preco_venda - $this->preco_compra) / $this->preco_compra;
    }
};

$produtos = array();

$low = 0;
$mid = 0; 
$high = 0;

for ($i=0; $i < $qtd; $i++) {
    echo "Produto " . (string)($i+1) . ":" . PHP_EOL;
    $produto = new Produto();
    $produto->nome = readline("Nome: ");
    $produto->preco_compra = (float)readline("Preco de compra: ");
    $produto->preco_venda = (float)readline("Preco de venda: ");

    $lucro = $produto->get_lucro();
    if ($lucro < 0.1) {
        $low++;
    } else if ($lucro < 0.2) {
        $mid++;
    } else {
        $high++;
    }

    $produtos[] = $produto;    
}

$total_compra = array_reduce($produtos, function($carry, $item) {
    return $carry + $item->preco_compra;
});

$total_venda = array_reduce($produtos, function($carry, $item) {
    return $carry + $item->preco_venda;
});


echo PHP_EOL . "RELATORIO: " . PHP_EOL;
echo "Lucro abaixo de 10%: " . number_format($low, 2) . PHP_EOL;
echo "Lucro entre 10% e 20%: " . number_format($mid, 2) . PHP_EOL;
echo "Lucro acima de 20%: " . number_format($high, 2) . PHP_EOL;
echo "Valor total de compra: " . number_format($total_compra, 2) . PHP_EOL;
echo "Valor total de venda: " . number_format($total_venda, 2) . PHP_EOL;
echo "Lucro total: " . number_format($total_venda - $total_compra , 2) . PHP_EOL;
?>