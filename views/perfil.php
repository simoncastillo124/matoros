<?php
$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion");

if (mysqli_connect_error()) {

// si se encuentra error en la conexión

exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}

$stmt = $conx->prepare('SELECT password, email FROM usuario WHERE id = ?');




session_start();
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información del Usuario</title>
    <!-- Enlaza los estilos de Bootstrap -->
    <link href="../src/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>    
<body>
<nav class="nav justify-content-center">
    <a class="nav-link active" href="inicio.php"><h1>Inicio</h1></a>
    <a class="nav-link" href="perfil.php"><span class="iconify" data-icon="mdi:user-circle" data-width="55"></span></a>
    <a class="nav-link" href="cerrar-sesion.php"><span class="iconify" data-icon="uiw:logout" data-width="50"></span></a>

</nav>

<div class="container">
<div class="row">
    <div class="jumbotron jumbotron-fluid text-center">
    <h1 class="display-4">Información del Usuario</h1>
    <p class="lead">La siguiente es la información registrada de tu cuenta.</p>
    <hr class="my-4">
    <table class=" table table-light">
                <tr>
                    <td>Usuario:</td>
                    <td><?= $_SESSION['name'] ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?= $email ?></td>
                </tr>
            </table>
    <hr class="my-2">
    <td><a href="forms/Ueditar.php?id=<?php echo $_SESSION["id"] ?>" class="btn btn-primary">Editar perfil</a></td>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
<?php include("footer.php");?>