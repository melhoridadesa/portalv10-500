<?php

try {
    $dbh = new PDO($configApp->connection->dsn
        ,$configApp->connection->user,
        $configApp->connection->password);

} catch (PDOException $e) {
    echo 'Conexao falhou: ' . $e->getMessage();
}

