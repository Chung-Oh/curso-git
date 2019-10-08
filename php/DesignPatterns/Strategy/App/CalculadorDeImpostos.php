<?php

namespace App;

use App\Orcamento;
use Interfaces\Imposto;

class CalculadorDeImpostos
{
    public function realizaCalculo(Orcamento $orcamento, Imposto $imposto)
    {
        $valor = $imposto->calcula($orcamento);

        return $valor;
    }
}
