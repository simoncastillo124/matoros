<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
    <?php include("../nav.php");
        $sql="SELECT * from usuario where ID=$id";
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
                        <form class="login" action="../../logica/Cusuarios.php?id=<?php echo $fila["ID"] ?>" method="post">
                            <h2>Editar Usuario</h2>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="fxemoji:contact" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="username" value="<?php echo $fila["username"] ?>" id="username" placeholder=" ">
                                        <label for="username">Nombre de usuario</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="logos:google-gmail" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" value="<?php echo $fila["email"] ?>" id="email" placeholder=" ">
                                        <label for="email">Gmail</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="flat-color-icons:address-book" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="telefono" value="<?php echo $fila["telefono"] ?>" id="telefono" placeholder=" ">
                                        <label for="telefono">NRO Telefono</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="logos:google-maps" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="calle" value="<?php echo $fila["domicilio"] ?>" id="calle" placeholder=" ">
                                        <label for="calle">Calle</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="entypo:address" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="callenum" value="<?php echo $fila["numero_domicilio"] ?>" id="callenum" placeholder=" ">
                                        <label for="callenum">NRO domicilio</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="gis:search-country" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="codigopostal" value="<?php echo $fila["codigo_postal"] ?>" id="codigopostal" placeholder=" ">
                                        <label for="codigopostal">CÓDIGO POSTAL</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-2 input-group-prepend">
                                    <span class="input-group-text border-0"><span class="iconify" data-icon="ic:baseline-password" data-width="55"></span></span>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" name="password" value="<?php echo $fila["password"] ?>" id="password" placeholder=" ">
                                        <label for="password">Contraseña</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <?php if ($fila["usertype"] == 1) { ?>
                                    <label for="usert">Tipo de usuario</label>
                                    <select class="form-control" name="usertype" id="usert">
                                        <option value="1">ADMIN</option>
                                        <option value="2">USER</option>
                                    </select>
                                <?php }} ?>
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
