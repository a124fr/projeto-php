<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF("123.456.789-10"), 
        "Vinicius Dias", 
        new Endereco("São Paulo", "xpto", "rua azul", "101T")
    )
);

try {
    $contaCorrente->depositar(-100);
} catch(InvalidArgumentException $e) {
    echo "Valor a depositar precisar ser positivo!!!";
}

