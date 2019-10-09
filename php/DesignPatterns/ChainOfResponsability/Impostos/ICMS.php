<?php

namespace Impostos;

use App\Orcamento;
use Interfaces\Imposto;

class ICMS implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}
