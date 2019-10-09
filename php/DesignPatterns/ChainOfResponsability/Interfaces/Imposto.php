<?php

namespace Interfaces;

use App\Orcamento;

interface Imposto
{
    public function calcula(Orcamento $orcamento);
}
