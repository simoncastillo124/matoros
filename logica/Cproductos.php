<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 
session_start();
isset($_POST["nombre"])? $nombre=$_POST["nombre"]:$nombre="";
$user=$_SESSION["id"];
isset($_POST["precio"])? $precio=$_POST["precio"]:$precio="";
isset($_POST["stock"])? $stock=$_POST["stock"]:$stock="";
isset($_POST["callenum"])? $callenum=$_POST["callenum"]:$callenum="";
isset($_POST["imagen"])? $imagen=$_POST["imagen"]:$imagen="";
isset($_POST["producttype"])? $producttype=$_POST["producttype"]:$producttype="";




// aca se hace la carga de un producto
if (!isset($_get["id"])) {
    //aca hacemos el insert
    if($_GET["id"]!=""){
        header("location: ../views/Padmin.php");
    }else{

    
    $sql="INSERT INTO producto (nombre, ID_usuario, precio, stock, imagen, tipo) VALUES ('$nombre', $user, $precio, $stock, '$imagen', $producttype)";
    mysqli_query($conx,$sql);
    mysqli_close($conx);
    header("location: ../views/index.php");
    }
    //aca abajo esta el codigo para borrar y o editar producto
}
if(isset($_GET["id"])){

    $id=$_GET["id"];

    if (isset($_GET["delete"])==1){
        $sql="DELETE FROM producto WHERE id=$id";
        mysqli_query($conx,$sql);
        mysqli_close($conx);
        header("location: ../views/Padmin.php");
        var_dump($sql);}

    if (!isset($_get["delete"])==1){

        $sql="UPDATE producto
            SET 
              ID = $id,
              nombre = '$nombre',
              precio = $precio,
              stock = $stock,
              ID_usuario = $user,
              imagen = '$imagen',
              tipo = $producttype
            WHERE ID = $id;
            ";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/index.php");
        }
        


    
}else{
    echo("algo anda mal");
}


?>