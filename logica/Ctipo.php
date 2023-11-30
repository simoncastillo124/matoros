<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 
session_start();
isset($_POST["nombre"])? $nombre=$_POST["nombre"]:$nombre="";






// aca se hace la carga de un producto
if (!isset($_POST["editar"])) {
    //aca hacemos el insert
    $sql="INSERT INTO 'tipos'( 'type') VALUES ('$nombre')";
    mysqli_query($conx,$sql);
    mysqli_close($conx);
    header("location: ../views/Padmin.php");
  
    //aca abajo esta el codigo para borrar y o editar producto
}else if(isset($_GET["id"])){
        $id=$_GET["id"];
        if (isset($_GET["delete"])==1){
            $sql="DELETE FROM producto WHERE id=$id";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/Padmin.php");
            var_dump($sql);
        }else{
            $sql="UPDATE producto
            SET 
              ID = $id,
            type = '$nombre',
            WHERE ID = $id;
            ";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/Padmin.php");
        }


    
}else{
    echo("algo anda mal");
}


?>