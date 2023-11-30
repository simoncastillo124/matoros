<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <?php
 include("../nav.php");

    $id=$_GET["id"];
        $sql="SELECT *,producto.ID as pid, usuario.ID as user_id FROM `producto` INNER JOIN usuario ON producto.ID_usuario=usuario.ID INNER JOIN tipos ON producto.tipo=tipos.id_tipo where producto.ID=$id";
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
                        <form class="login" action="../../logica/Cproductos.php<?php if(!isset($_GET["id"])){echo "";}else{echo "?id=".$fila["ID"];}?>" method="post">
                            <h2>Editar producto</h2>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="nimbus:mate" width="70" height="70"></iconify-icon></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="nombre" value="<?php echo $fila["nombre"] ?>" id="nombre" placeholder=" ">
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
                                        <input type="text" class="form-control" name="" value="<?php echo $fila["username"] ?>" id="user" placeholder=" ">
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
                                        <input type="number" class="form-control" name="precio" value="<?php echo $fila["precio"] ?>" id="precio" placeholder=" ">
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
                                        <input type="text" class="form-control" name="stock" value="<?php echo $fila["stock"] ?>" id="stock" placeholder=" ">
                                        <label for="stock">stock</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                <span class="input-group-text border-0"> <?php echo '<img src = "data:image/png;base64,' . base64_encode($fila['imagen']) . '" width = "70px" height = "70px"/>' . '</td>'; ?></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="file" accept="image/png, .jpeg, .jpg, image/gif" class="form-control" name="imagen" value="" id="imagen" placeholder=""?>
                                        <label for="imagen">Imagen</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="form-group">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><iconify-icon icon="mdi:stanley-knife" width="70" height="70"></iconify-icon></span>
                                </div>
                                    <?php  ?>
                                        <label for="usert">Tipo de producto</label>
                                        <select class="form-control" name="producttype" id="usert">
                                           <?php  echo "<option value='" .$fila["id_tipo"]."'>". $fila["type"]. "</option>" ?>
                                        </select>
                                    <?php } ?>
                                </div>
                            <br>
                            <div class="d-grid gap-2">
                                    <button class="btn btn-lg btn-success" type="submit">Editar</button>
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
