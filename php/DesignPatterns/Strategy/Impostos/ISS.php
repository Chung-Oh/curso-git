<?php

namespace Strategy\Impostos;

class ISS
{
    public function calculaISS(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }
}
