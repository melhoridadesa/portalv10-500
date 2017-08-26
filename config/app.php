<?php

return $configApp = (object) [
    'app' => 'Melhor Idade S&A',
    'locale' => 'pt',

    //Conexao
    'connection'   => (object)[
      'dsn'      => 'mysql:dbname=melhoridade;host=192.168.10.10',
      'user'     => 'homestead',
      'password' => 'secret'
    ]
];