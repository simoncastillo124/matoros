<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <?php
 include("../nav.php");

        $sql="SELECT * from tipos";
        if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
       
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
                        <form class="login" action="../../logica/Cproductos.php" method="post">
                            <h2>Crear producto</h2>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="nimbus:mate" width="70" height="70"></iconify-icon></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nombre" value="" id="nombre" placeholder=" ">
                                        <label for="nombre">Nombre de producto</label>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="editar">
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="mdi:user" width="70" height="70"></iconify-icon></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="" value="" id="user" placeholder=" ">
                                        <label for="user">Usuario</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="streamline:bag-dollar-solid" width="70" height="70"></iconify-icon></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="precio" value="" id="precio" placeholder=" ">
                                        <label for="precio">Precio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="system-uicons:boxes" width="70" height="70"></iconify-icon></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="stock" value="" id="stock" placeholder=" ">
                                        <label for="stock">stock</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                <span class="input-group-text border-0"></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="file" accept="image/png, .jpeg, .jpg, image/gif" class="form-control" name="imagen" value="" id="imagen" placeholder="">
                                        <label for="imagen">Imagen</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="mdi:stanley-knife" width="70" height="70"></iconify-icon></span>
                                </div>
                                        <label for="usert">Tipo de producto</label>
                                        <select class="form-control" name="producttype" id="usert">
                                        <?php  while ($fila= mysqli_fetch_assoc($result)){ ?> 
                                        <?php  echo "<option value='" .$fila["id_tipo"]."'>". $fila["type"]. "</option>" ?>
                                        <?php } ?>
                                        </select>
                                </div>
                            <br>
                            <div class="d-grid gap-2">
                                    <button class="btn btn-lg btn-success" type="submit">Crear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>
<?php include ("../footer.php");?>
