<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 
session_start();
isset($_POST["nombre"])? $nombre=$_POST["nombre"]:$nombre="";

//borralo

if (isset($_GET["delete"])==1){
    $id=$_GET["id"];
    $sql = "DELETE FROM tipos WHERE id_tipo = ?";
    $stmt = mysqli_prepare($conx, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conx);
        header("location: ../views/Padmin.php");
        exit();
    } else {
        echo "Error in prepared statement: " . mysqli_error($conx);
    }
    var_dump($sql);}



// aca se hace la carga de un tipos
if (!isset($_get["id"])) {
    //aca hacemos el insert
    if($_GET["id"]!=""){
        header("location: ../views/Padmin.php");
    }else{
        $sql = "INSERT INTO tipos (type) VALUES ('$nombre')";
        mysqli_query($conx, $sql);
        mysqli_close($conx);
        header("location: ../views/Padmin.php");
    }}
    //aca abajo esta el editar tipos
if(isset($_GET["id"])){
    $id=$_GET["id"];

        if(!isset($_GET["delete"])==1){
            $sql="UPDATE tipos SET  id_tipo = $id, type = '$nombre' WHERE id_tipo = $id;";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/Padmin.php");
        }


    
}else{
    echo("algo anda mal");
}


?>