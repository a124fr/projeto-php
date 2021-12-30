<?php

require_once 'src/Conta.php';

$conta = new Conta();
//var_dump($conta);

$conta->cpfTitular = "123.456.789-10";
$conta->nomeTtitular = "Vinicius";
$conta->saldo = 500;
echo "{$conta->cpfTitular} - {$conta->nomeTtitular}";
echo PHP_EOL;

$segudaConta = new Conta();
$segudaConta->cpfTitular = '987.654.321-11';
$segudaConta->nomeTtitular = 'Patrícia';
$segudaConta->saldo = 1500;
echo "{$segudaConta->cpfTitular} - {$segudaConta->nomeTtitular}";

