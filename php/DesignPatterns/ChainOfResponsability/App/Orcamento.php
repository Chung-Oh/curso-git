<?php

namespace App;

class Orcamento
{
    private $valor;
    private $itens;

    public function __construct()
    {
        $this->itens = [];
    }

    public function novoProduto($item, $valor)
    {
        $this->setValor($valor);
        array_push($this->itens, $item);
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getItens()
    {
        return $this->itens;
    }    

    public function setItens($item)
    {
        array_push($this->itens, $item);
    }
}
