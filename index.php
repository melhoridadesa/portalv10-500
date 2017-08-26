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
</head>
<body>
<!-- MENU -->
<?php require_once('views/_includes/site/menu.php'); ?>

<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-12 col-md-9">
            <?php
                $bannerAtivo = true;
                require_once('views/_includes/site/topo_banner.php');
            ?>
            <!-- CORPO DA PAGINA -->
            <?php
                $corpoDefault = true;
                require_once('views/_includes/site/corpo_default.php');
            ?>
        </div>

        <!-- MENU -->
    </div>

</div>

<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>