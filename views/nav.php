<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
    <link href="../src/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="../src/font.css" rel="stylesheet" id="font">
    <link rel="stylesheet" href="../src/navstyle.css">    
    <link rel="stylesheet" href="../src/docs.min.js">
    <link rel="stylesheet" href="../src/navbar.css">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>
<body>
    <?php $conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 
        session_start();
    if (!isset($_SESSION['loggedin'])) {
        header('Location: forms/login.php');
        exit;}
        $id=$_SESSION["id"];
        $sql="SELECT usertype from usuario where ID=$id";
        if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
        while ($fila= mysqli_fetch_assoc($result)){
        ?>

<nav class="navbar navbar-expand-md navbar-primary fixed-top bg-primary" data-bs-theme="dark">
<div class="navbar-nav mx-auto">
  <div class="container-fluid">
    <div class="collapse navbar-collapse">
    <a  readonly class="nav-link position-absolute bottom-10 start-0" aria-current="page"><span class="iconify" data-icon="fluent-emoji-high-contrast:mate"  data-width="42"></a>
        <li class="nav-item">
          <h5><a class="nav-link" href="index.php">Inicio</a></h5>
        </li>
        <li class="nav-item dropdown">
          <h5>
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Productos</a>
          <div class="dropdown-menu" data-bs-theme="light">
            <a class="dropdown-item" href="index.php">Todos los Productos</a>
            <a class="dropdown-item" href="#">Equipo de mates</a>
            <a class="dropdown-item" href="#">Mates</a>
            <a class="dropdown-item" href="#">Bombillas</a>
            <a class="dropdown-item" href="#">Bolsos</a>
            <a class="dropdown-item" href="#">Yerberas</a>
            <a class="dropdown-item" href="#">Yerba Mate</a>
          </div>
          </h5>
        </li>
        <?php if($fila["usertype"]==1){ ?>
        <li class="nav-item">
          <h5><a href="Padmin.php" class="nav-link">Panel de admin</a></h5>
        </li>
        <?php } ?>
        <li class="nav-item">
          <h5><a href="#" class="nav-link">Quienes somos?</a></h5>
        </li>
        <li class="nav-item">
          <h5><a href="#" class="nav-link">Venta a empresas</a></h5>
        </li>
        <li class="nav-item">
        <h5><a href="#" class="nav-link">Como comprar</a></h5>
        </li>
        <li class="nav-item">
          <h5><a href="#" class="nav-link">Preguntas frecuentes</a></h5>
        </li>
        <?php }?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="iconify" data-icon="mdi:user-outline" data-width="35"></span></a>
          <div class="dropdown-menu" data-bs-theme="light">
                    <a href="perfil.php" class="dropdown-item"><?php echo $_SESSION["name"] ?></a>
          <div class="dropdown-divider">
          </div>
            <a class="dropdown-item" href="perfil.php">Mi cuenta</a>
            <a class="dropdown-item" href="carrito.php">Carrito</a>
        </li>
        <li class="nav-item">
          <h5><a href="../logica/logout.php" class="nav-link end-0"><span class="iconify" data-icon="el:off" data-width="35"></a></h5>
        </li>
        </div>
  </div>
</div>
</nav>
<div class="container">
<br>
    <div class="row">