<?php

namespace Descontos;

use App\Orcamento;

interface Desconto
{
    public function desconta(Orcamento $orcamento);
    public function setProximo(Desconto $desconto);
}

