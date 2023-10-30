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
    <a href="forms/Ueditar.php?id=<?php echo $fila["ID"] ?>"><button href= type="button" class="btn btn-success"><span class="iconify" data-icon="material-symbols:edit-outline" style="color: white;"></span></button></a>
    <a href="../logica/Cusuarios.php?id=<?php echo $fila["ID"] ?>& delete=1 "><button type="button" class="btn btn-danger"><span class="iconify" data-icon="ph:trash" style="color: white;"></span></button></a>
</td>
</tr>
</tbody>
<?php }?>
</table>
</div>
    <script >
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
    </script>
<?php include("footer.php");?>