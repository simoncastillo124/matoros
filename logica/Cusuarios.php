<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 

isset($_POST["username"])? $username=$_POST["username"]:$username="";
isset($_POST["email"])? $email=$_POST["email"]:$email="";
isset($_POST["telefono"])? $telefono=$_POST["telefono"]:$telefono="";
isset($_POST["calle"])? $calle=$_POST["calle"]:$calle="";
isset($_POST["callenum"])? $callenum=$_POST["callenum"]:$callenum="";
isset($_POST["codigopostal"])? $codigopostal=$_POST["codigopostal"]:$codigopostal="";
isset($_POST["password"])? $password=$_POST["password"]:$password="";
isset($_POST["usertype"])?$usert=$_POST["usertype"]:$usert=2;

// aca se hace la carga de un usuario
if (isset($_POST["password_r"])!=""){
    if ($password ==$_POST["password_r"]){
        // aca checkeamos las passwords y nombres de usuarios para que no se repitan en la bd
        $sql="SELECT * FROM usuario where username='$username' OR  password='$password'";
        $result= mysqli_query($conx,$sql);

        if($result-> num_rows>0){
            header("location: ../views/forms/register.php");
        }else{
            mysqli_close($conx);
            var_dump($sql);
            //aca hacemos el insert
            $sql="INSERT INTO `usuario`( `username`, `password`, `email`, `telefono`, `domicilio`, `numero_domicilio`, `codigo_postal`, `usertype`) VALUES ('$username','$password','$email','$telefono','$calle','$callenum','$codigopostal','$usert')";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/forms/login.php");}
    }else{
        header("location: ../views/forms/register.php");
    }
    //aca abajo esta el codigo para borrar y o editar usuarios
}else if(isset($_GET["id"])){
        $id=$_GET["id"];
        if (isset($_GET["delete"])==1){
            $sql="DELETE FROM `usuario` WHERE id=$id";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/Padmin.php");
        }else{
            var_dump($sql);
            $sql="UPDATE `usuario` SET `ID`='$id',`username`='$username',`password`='$password',`email`='$email',`telefono`='$telefono',`domicilio`='$calle',`numero_domicilio`='$callenum',`codigo_postal`='$codigopostal',`usertype`='$usert' WHERE ID=$id";
            mysqli_query($conx,$sql);
            mysqli_close($conx);
            header("location: ../views/index.php");
        }


    
}else{
    echo("algo anda mal");
}


?>