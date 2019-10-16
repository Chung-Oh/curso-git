<?php

namespace Descontos;

use Desconto;
use App\Orcamento;

class Desconto500Reais implements Desconto
{
    public function desconta(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
            
        } else {
            return 0;
        }
    }
}
