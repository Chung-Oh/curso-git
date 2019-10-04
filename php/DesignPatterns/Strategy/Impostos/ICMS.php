<?php

namespace Strategy\Impostos;

class ICMS
{
    public function calculaICMS(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}
