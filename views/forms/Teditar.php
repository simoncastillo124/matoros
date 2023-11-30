<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <?php
 include("../nav.php");
    $id=$_GET["id"];
        $sql="SELECT * FROM `tipos`";
        if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
        while ($fila= mysqli_fetch_assoc($result)){
    ?>
    <link href="../../src/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../../src/font.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-body">
                        <form class="login" action="../../logica/Ctipo.php?id=<?php echo $fila["id_tipo"] ?>" method="post">
                            <h2>Editar tipo de producto</h2>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="nimbus:mate" width="70" height="70"></iconify-icon></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $fila["type"] ?>" id="nombre" placeholder=" ">
                                        <label for="nombre">tipo de producto</label>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        </body>