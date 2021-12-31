<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\{Conta,ContaCorrente,ContaPoupanca};
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

$conta = new ContaCorrente(
    new Titular(new CPF("12R3.456.789-10"), 
        "Vinicius Dias", 
        new Endereco("Petrópolis", "Teste", "Rual lá", "37")
    )    
);

$conta->depositar(500);
echo "Saldo Atual é: R\${$conta->getSaldo()}".PHP_EOL;

try {
    $conta->sacar(600);
    echo "Saldo após saque de R$100 reais é: R\${$conta->getSaldo()}".PHP_EOL;
} catch(\Alura\Banco\Modelo\Conta\SaldoInsuficienteException $e) {
    echo $e->getMessage();    
}

echo PHP_EOL;
echo "Saldo Atual é: R\${$conta->getSaldo()}".PHP_EOL;