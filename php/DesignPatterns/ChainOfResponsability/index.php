<?php

function autoload($class)
{
    echo 'File: ' . $class . '<br>';
    require $class . '.php';
}

spl_autoload_register('autoload');

use App\Calculador;
use App\Orcamento;
// use Descontos\Desconto500Reais;
// use Descontos\DescontoPor5Itens;

$orcamento = new Orcamento();
$orcamento->novoProduto('Playstation', 3200);
$orcamento->novoProduto('Geladeira', 1100);
$calculador = new Calculador();

echo '<pre>============================================= SAÍDA =================================================<br>';
echo 'Orçamento = R$ ' . $orcamento->getValor() . '<br>';
echo 'Desconto = R$ ' . $calculador->calcula($orcamento) . '<br>';

echo '<br>============================================= DEBBUG =================================================<br>';
print_r($orcamento);