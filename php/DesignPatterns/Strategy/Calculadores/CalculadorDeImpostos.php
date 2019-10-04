<?php

namespace Strategy\Calculadores;

class CalculadorDeImpostos
{
    public function realizaCalculoICMS(Orcamento $orcamento)
    {
        $icms = new ICMS();
        $icms = $icms->calculaICMS($orcamento);

        return $icms;
    }

    public function realizaCalculoISS(Orcamento $orcamento)
    {
        $iss = new ISS();
        $iss = $iss->calculaISS($orcamento);

        return $iss;
    }
}
