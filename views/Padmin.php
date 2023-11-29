<?php include("nav.php");  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        thead{
            font-size: 22px; 
        }
        tbody{
            font-size: 18px;
        }
    </style>
</head>
<?php 
$sl="SELECT usertype from usuario where ID=$id";
if(!$resul= mysqli_query($conx,$sl)) die("consulta fallida");
while ($row= mysqli_fetch_assoc($resul)){
    if($row["usertype"]!=1){
        header("location: index.php ");
    }
 }

$sql="SELECT * FROM usuario";
if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
?>
<body>
<div class="col col-md-12 text-center">
<button class="btn btn-lg btn-info" id="toggleButton">Mostrar/Esconder usuarios</button>
    <table class="table table-light table-bordered" id="usuarios" style="display: none; margin-top: 10px;">
<thead>
<tr>
<td>Nombre</td>
<td>Email</td>
<td>Telefono</td>
<td>Domicilio</td>
<td>N° Domicilio</td>
<td>Codigo Postal</td>
<td>Privilegios</td>
<td>Acción</td>
</tr>
</thead>
<?php while ($fila= mysqli_fetch_assoc($result)) { ?>
<tbody>
<tr>
<td scope="row"><?php echo $fila["username"] ?></td>
<td scope="row"><?php echo $fila["email"] ?></td>
<td scope="row"><?php echo $fila["telefono"] ?></td>
<td scope="row"><?php echo $fila["domicilio"] ?></td>
<td scope="row"><?php echo $fila["numero_domicilio"] ?></td>
<td scope="row"><?php echo $fila["codigo_postal"] ?></td>
<td scope="row"><?php echo $fila["usertype"] ?></td>
<td>
    <a href="http://localhost/matoros/views/forms/Ueditar.php?id=<?php echo $fila["ID"] ?>"><button href= type="button" class="btn btn-success"><span class="iconify" data-icon="material-symbols:edit-outline" style="color: white;"></span></button></a>
    <a href="http://localhost/matoros/views/logica/Cusuarios.php?id=<?php echo $fila["ID"] ?>& delete=1 "><button type="button" class="btn btn-danger"><span class="iconify" data-icon="ph:trash" style="color: white;"></span></button></a>
</td>
</tr>
</tbody>
<?php }?>
</table>
</div>
<?php

   $sq="SELECT * FROM producto";
if(!$resul= mysqli_query($conx,$sq)) die("consulta fallida");
?>
<body>
<div class="col col-md-12 text-center">
<button class="btn btn-lg btn-info" id="eButton">Mostrar/Esconder producto</button>
 <table class="table table-light table-bordered" id="producto" style="display: none; margin-top: 10px;">
<thead>
<tr>
<td>Nombre</td>
<td>quien lo agrego</td>
<td>precio</td>
<td>fecha de entrada</td>
<td>stock</td>
<td>tipo</td>
<td>img</td>
<td>Acción</td>
</tr>
</thead>
<?php while ($fil= mysqli_fetch_assoc($resul)) { ?>
<tbody>
<tr>
<td scope="row"><?php echo $fila["nombre"] ?></td>
<td scope="row"><?php echo $fila["ID_usuario"] ?></td>
<td scope="row"><?php echo $fila["precio"] ?></td>
<td scope="row"><?php echo $fila["fecha_entrada"] ?></td>
<td scope="row"><?php echo $fila["stock"] ?></td>
<td scope="row"><?php echo $fila["tipo"] ?></td>
<td scope="row"><?php echo $fila["imagen"] ?></td>
<td>
    <a href="http://localhost/matoros/views/forms/Ueditar.php?id=<?php echo $fila["ID"] ?>"><button href= type="button" class="btn btn-success"><span class="iconify" data-icon="material-symbols:edit-outline" style="color: white;"></span></button></a>
    <a href="http://localhost/matoros/views/logica/Cusuarios.php?id=<?php echo $fila["ID"] ?>& delete=1 "><button type="button" class="btn btn-danger"><span class="iconify" data-icon="ph:trash" style="color: white;"></span></button></a>
</td>
</tr>
</tbody>
<?php }?>
</table>
</div>
    <script>
        // Obtén una referencia al botón y a la tabla
        var toggleButton = document.getElementById("toggleButton");
        var miTabla = document.getElementById("usuarios");

        // Agrega un evento de escucha al botón
        toggleButton.addEventListener("click", function() {
            // Verifica si la tabla está visible
            if (miTabla.style.display === "none") {
                // Si está oculta, muéstrala
                miTabla.style.display = "table";
            } else {
                // Si está visible, ocúltala
                miTabla.style.display = "none";
            }
        });
        //##############################################################################################################
                // Obtén una referencia al botón y a la tabla
        var eButton = document.getElementById("Button");
        var Tabla = document.getElementById("producto");

        // Agrega un evento de escucha al botón
        eButton.addEventListener("click", function() {
            // Verifica si la tabla está visible
            if (Tabla.style.display === "none") {
                // Si está oculta, muéstrala
                Tabla.style.display = "table";
            } else {
                // Si está visible, ocúltala
                Tabla.style.display = "none";
            }
        });
        </script>
<?php include("footer.php");?>