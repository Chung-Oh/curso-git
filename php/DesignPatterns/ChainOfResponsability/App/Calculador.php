<?php

namespace App;

use App\Orcamento;
use Descontos\Desconto500Reais;
use Descontos\DescontoPor5Itens;

class Calculador
{
    public function calcula(Orcamento $orcamento)
    {
        // Vai chamando os descontos na ordem até que algum deles dê diferente
        $desconto = new DescontoPor5Itens();
        $desconto = $desconto->desconta($orcamento);

        if ($desconto == 0) {
            $desconto = new Desconto500Reais();
            $desconto = $desconto->desconta($orcamento);
        }

        return $desconto;
    }
}
