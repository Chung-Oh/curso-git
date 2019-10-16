<?php

namespace Descontos;

use Desconto;
use App\Orcamento;

class DescontoPor5Itens implements Desconto
{
    public function desconta(Orcamento $orcamento)
    {
        if (count($orcamento->getItens() >= 5)) {
            return $orcamento->getValor() * 0.1;

        } else {
            return 0;
        }
    }
}
