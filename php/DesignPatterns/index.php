<?php

function autoload($class)
{
    echo 'File: ' . $class . '<br>';
    require $class . '.php';
}

spl_autoload_register('autoload');

use Strategy\Orcamento;

$orcamento = new Orcamento(1500);

echo '============================================= SAÍDA =================================================<br>';
echo '<pre>';
print_r($orcamento);


echo '<br>============================================= DEBBUG =================================================<br>';