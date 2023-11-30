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
//check de las variables


//borrar
if (isset($_GET["delete"]) && is_numeric($_GET["delete"])) {
    $id = $_GET["id"];

    // Validate and sanitize $id here...

    $sql = "DELETE FROM producto WHERE ID = ?";
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
}
    var_dump($sql);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
// aca se hace la carga de un producto
if (!isset($_get["id"])) {
    //aca hacemos el insert
    if($_GET["id"]!=""){
        header("location: ../views/Padmin.php");
    }else{

    
        $sql = "INSERT INTO producto (nombre, ID_usuario, precio, stock, imagen, tipo) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conx, $sql);
        
        if ($stmt) {
            // Assuming $imagen contains your image data
            mysqli_stmt_bind_param($stmt, "sdisss", $nombre, $user, $precio, $stock, $imagen, $producttype);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        
            // Redirect to the desired location
            header("location: ../views/index.php");
            exit();
        } else {
            echo "Error in prepared statement: " . mysqli_error($conx);
        }
        mysqli_close($conx);
    header("location: ../views/index.php");
    }
    //aca abajo esta el codigo para borrar y o editar producto
}
if(isset($_GET["id"])){

    $id=$_GET["id"];

    if (!isset($_get["delete"])==1){
        $bmpStr = file_get_contents($imagen);   
        $hexStr = bin2hex($bmpStr);
        $hexArray = str_split($hexStr);
    
        // Update SQL using prepared statement
        $sql = "UPDATE producto
                SET 
                  nombre = ?,
                  precio = ?,
                  stock = ?,
                  ID_usuario = ?,
                  imagen = ?,
                  tipo = ?
                WHERE ID = ?";
    
        $stmt = mysqli_prepare($conx, $sql);
    
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sdisssi", $nombre, $precio, $stock, $user, $hexArray, $producttype, $id);
            mysqli_stmt_execute($stmt);
    
            mysqli_stmt_close($stmt);
            mysqli_close($conx);
    
            header("location: ../views/index.php");
            exit();
        } else {
            echo "Error in prepared statement: " . mysqli_error($conx);
        }
    }

        


    
}else{
    echo("algo anda mal");
}
}

?>