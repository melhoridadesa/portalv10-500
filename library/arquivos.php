<?php

function caminhoDefault()
{
    return __DIR__."../views/_includes/site";
}

function arquivoExiste(string $arquivo)
{
    $caminho = caminhoDefault();
    return file_exists($caminho.$arquivo);
}

function obterArquivo(bool $ativo = false, string $arquivo)
{
    if(arquivoExiste($arquivo)) {
        echo 'OK';
    }
}