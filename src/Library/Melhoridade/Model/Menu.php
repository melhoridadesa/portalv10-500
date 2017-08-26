<?php


namespace Library\Melhoridade\Model;

interface MenuContract
{
    public function data();
}

class Menu implements MenuContract
{
    public function data()
    {
        return [
            ["id" => 1, "url" => "home.php", "titulo" => "home"],
            ["id" => 2, "url" => "contrato.php", "titulo" => "contrato do aluno"],
        ];
    }
}