<?php

namespace Impostos;

use App\Orcamento;
use Interfaces\Imposto;

class ISS implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
}
