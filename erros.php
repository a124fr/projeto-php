<?php
// Configurações de Erro deve ser feito no arquivo php.ini
error_reporting(E_ALL);
// ini_set('error_reporting', E_ALL); // -> reporta qualquer erro.
// ini_set('display_errors', 1); // -> habilitar para mostrar os erros
// ini_set('log_errors', 1) // -> habilitar log para erros.
// ini_set('error_log', '/var/log/minha-aplicacao'); // -> habilitar local onde vai ficar os erros.

// @ -> ignora os erros, os erros ficam escondidos.
// echo @$variavel;

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    var_dump($errno, $errstr, $errfile, $errline);
    
    switch($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso";
            break;
        case E_NOTICE:
            echo "Melhoar não fazer isso";
            break;
    }
    
    return true;// não exibte mais erro
});

echo $variavel;

