<?php

function caminhoDefault()
{
    return __DIR__."/../views/_includes/site/";
}

function arquivoExiste(string $arquivo)
{
    return file_exists($arquivo);
}

function arquivoComExtensao(string $arquivo, int $tipo = 0)
{
    $extensao = null;

    switch($tipo){
        case 1:
            $extensao = 'html';
           break;
        default:
            $extensao = 'php';
            break;
    }

    return caminhoDefault()."{$arquivo}.{$extensao}";
}

function validarArquivo(string $arquivo, bool $ativo = true)
{
    $arquivoComExtensao = arquivoComExtensao($arquivo);

    return (arquivoExiste($arquivoComExtensao) && $ativo);
}

function View(string $arquivo, array $dados = [], bool $ativo = true)
{
    if(validarArquivo($arquivo, $ativo)) {
        $dado = $dados;
        require_once arquivoComExtensao($arquivo);
    }
}