<?php

require_once 'autoload.php';

// require_once 'src/Modelo/Endereco.php';
// require_once 'src/Modelo/CPF.php';
// require_once 'src/Modelo/Pessoa.php';
// require_once 'src/Modelo/Conta/Titular.php';
// require_once 'src/Modelo/Conta/Conta.php';

use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\Titular;

$endereco = new Endereco("Petrópolis", "um bairro qualquer", "minha rua", "71B");

$titularVinicius = new Titular(new CPF("001.002.003-11"), "Vinicius Dias", $endereco);
$primeiraConta = new Conta($titularVinicius);
$primeiraConta->depositar(1000);
$primeiraConta->sacar(300);

// echo $primeiraConta->getSaldo();
// ar_dump($primeiraConta);

$segundaConta = new Conta(new Titular(new CPF("698.549.549-10"), "Ana Carla", $endereco));
$terceiraConta = new Conta(new Titular(new CPF("598.449.509-21"), "Ana Carolina", new Endereco("São Miguel", "jardim", "beija flor", "57D")));

echo "Titular da 3° Conta é: ".$terceiraConta->getTitular()->getNome().PHP_EOL;

echo "Números de contas que foram criadas é: ".Conta::getNumeroDeContas().PHP_EOL;
// var_dump($primeiraConta->getTitular()->getEndereco());

