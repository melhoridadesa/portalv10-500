<?php

//Configs
$configs = [
    'app'
];

foreach($configs as $config) {
    require_once __DIR__."/{$config}.php";
}

//Libraries
$libraries = [
    'arquivos',
    'database'
];

foreach($libraries as $arquivo) {
    require_once __DIR__."/../library/{$arquivo}.php";
}