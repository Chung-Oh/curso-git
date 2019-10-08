<?php

function autoload($class)
{
    echo 'File: ' . $class . '<br>';
    require $class . '.php';
}

spl_autoload_register('autoload');

use Impostos\ISS;
use Impostos\ICMS;
use App\Orcamento;
use App\CalculadorDeImpostos;

$iss = new ISS();
$icms = new ICMS();
$orcamento = new Orcamento(1500);
$calculadora = new CalculadorDeImpostos();

echo '<pre>============================================= SAÍDA =================================================<br>';
echo 'Orçamento = R$ ' . $orcamento->getValor() . '<br>';
echo 'ICMS = R$ ' . $calculadora->realizaCalculo($orcamento, $icms) . '<br>';
echo 'ISS = R$ ' . $calculadora->realizaCalculo($orcamento, $iss) . '<br>';

echo '<br>============================================= DEBBUG =================================================<br>';