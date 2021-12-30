<?php

require_once 'autoload.php';

use Alura\Banco\Servico\Autenticador;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;

$autenticador = new Autenticador();
$diretor = new Gerente("João da Silva", new CPF("123.456.789-10"), 10000);

$titular = new Titular(new CPF("101.101.291-39"), "Janara Gabriela", new Endereco("São Paulo", "Planaltina", "Rua z", "54"));
// $autenticador->tentarLogin($diretor, "123");
$autenticador->tentarLogin($diretor, "4321");
$autenticador->tentarLogin($titular, "abcd");

