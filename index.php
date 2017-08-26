<?php
//Autoload
require_once('config/autoload.php');
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <style>
        .container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            margin-top: 70px;
            width: 100%;
        }
    </style>
    <title> <?= $configApp->app; ?> </title>
</head>
<body>

<?php

View('menu', [
    ['id' => 1, 'titulo' => 'home', 'url' => 'seila.php'],
    ['id' => 2, 'titulo' => 'link', 'url' => 'link.php']
]);

?>

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-12 col-md-9">
            <?php View('topo_banner'); ?>
            <!-- CORPO DA PAGINA -->
            <?php View('corpo_default'); ?>
        </div>
            <!-- MENU -->
            <div class="col-6 col-md-3 sidebar-offcanvas" id="sidebar">
                <div class="list-group">
                    <a href="#" class="list-group-item active">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                    <a href="#" class="list-group-item">Link</a>
                </div>
            </div>
        </div>
</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>