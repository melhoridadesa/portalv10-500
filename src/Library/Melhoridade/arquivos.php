<?php

namespace Library\Melhoridade;

class Arquivos
{

    function caminhoDefault()
    {
        return __DIR__ . "/../../../views/_includes/site/";
    }

    function arquivoExiste(string $arquivo)
    {
        return file_exists($arquivo);
    }

    function arquivoComExtensao(string $arquivo, int $tipo = 0)
    {
        $extensao = null;

        switch ($tipo) {
            case 1:
                $extensao = 'html';
                break;
            default:
                $extensao = 'php';
                break;
        }

        return $this->caminhoDefault() . "{$arquivo}.{$extensao}";
    }

    function validarArquivo(string $arquivo, bool $ativo = true)
    {
        $arquivoComExtensao = $this->arquivoComExtensao($arquivo);

        return ($this->arquivoExiste($arquivoComExtensao) && $ativo);
    }

    function View(string $arquivo, array $dados = [], bool $ativo = true)
    {
        if ($this->validarArquivo($arquivo, $ativo)) {
            $dado = $dados;
            require_once $this->arquivoComExtensao($arquivo);
        }
    }
}