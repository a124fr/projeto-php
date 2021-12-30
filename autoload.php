<?php
// PSR 4 - Autoload. - Implementação simplificada do autoload da PSR4. - (https://www.php-fig.org/psr/psr-4/)
// outro exemplo implementação Autoload -> https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md
spl_autoload_register(function(string $nomeCompletoDaClasse) {
    // namespace raiz(vendor namespace) -> Alura\Banco
    // Alura\Banco\Modelo\Endereco -> src\Modelo\Endereco
    // src\Modelo\Endereco -> src/Modelo/Endereco.php            
    $caminhoArquivo = str_replace('Alura\\Banco', 'src', $nomeCompletoDaClasse);
    $caminhoArquivo = str_replace('\\', DIRECTORY_SEPARATOR, $caminhoArquivo);
    $caminhoArquivo .='.php';
    
    if (file_exists($caminhoArquivo)) {
        require_once $caminhoArquivo;
    }    
});