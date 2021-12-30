<?php

require 'src/Conta.php';

$conta1 = new Conta();
$conta1->saldo = 200;

// var_dump($conta1);

// $conta1->sacar(150);

// var_dump($conta1);

// $conta1->depositar(100);

// var_dump($conta1);

$conta2 = new Conta();
$conta2->depositar(100);

$conta2->transferir(34, $conta1);

var_dump($conta2);
var_dump($conta1);

