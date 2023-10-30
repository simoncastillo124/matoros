<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
<?php include("nav.php");
$sql="SELECT * FROM producto";
if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
?>






<div class="col-md-3 text-center">
<?php

    while ($fila= mysqli_fetch_assoc($result)) {
?>   

    <div class="card h-100">
    <img>
       <?php
        echo '<img class="card-img-top" src=""' . base64_encode($fila["imagen"]) . 
            'alt="producto"'. '"/>';  
       ?>
    </img>

        <div class="card-body">
        <h4 class="card-title"><?php echo $fila["nombre"] ?><br>$<?php echo $fila["precio"] ?></h4>
        <form method="post" action="">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Carrito</button>
            </form>
        </div>
    </div>
</div>
<?php }?>
<?php include("footer.php");?>    
