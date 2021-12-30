<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\{Conta,ContaCorrente,ContaPoupanca};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaCorrente(
    new Titular(new CPF("123.456.789-10"), 
        "Vinicius Dias", 
        new Endereco("Petrópolis", "Teste", "Rual lá", "37")
    )    
);

$conta->depositar(500);
echo "Saldo Atual é: R\${$conta->getSaldo()}".PHP_EOL;

$conta->sacar(100);

echo "Saldo após saque de R$100 reais é: R\${$conta->getSaldo()}".PHP_EOL;
