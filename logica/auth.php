<?php 

$conx=mysqli_connect("localhost","root","","matoros")or die("pasaron cositas en la conexion"); 

// Se valida si se ha enviado información, con la función isset()

if (mysqli_connect_error()) {

    // si se encuentra error en la conexión

    exit('Fallo en la conexión de MySQL:' . mysqli_connect_error());
}


if (!isset($_POST['email'], $_POST['password'])) {

    // si no hay datos muestra error y re direccionar

    header('Location: ../views/login.php');
}

// evitar inyección sql

if ($stmt = $conx->prepare('SELECT ID, password, username FROM usuario WHERE email = ?')) {

    // parámetros de enlace de la cadena s

    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
}


// acá se valida si lo ingresado coincide con la base de datos

$stmt->store_result();
if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $password, $username);
    $stmt->fetch();

    // se confirma que la cuenta existe ahora validamos la contraseña

    if ($_POST['password'] === $password) {


        // la conexion sería exitosa, se crea la sesión


        session_start();
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $username;
        $_SESSION['id'] = $id;
        header('Location: ../views/index.php');
    }
} else {
    // usuario incorrecto
    header('Location: ../views/forms/login.php');
}

$stmt->close();









?>