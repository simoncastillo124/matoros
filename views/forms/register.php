<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../../src/style.css">
	<link rel="stylesheet" href="../../src/bootstrap.min.css">
    <link rel="stylesheet" href="../../src/font.css">
    <style>
      body{
        background-image: url('../../src/mates.jpg');
        background-size: cover;
      }
      .slide-in-elliptic-bottom-fwd {
	-webkit-animation: slide-in-elliptic-bottom-fwd 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: slide-in-elliptic-bottom-fwd 0.7s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
@-webkit-keyframes slide-in-elliptic-bottom-fwd {
  0% {
    -webkit-transform: translateY(600px) rotateX(30deg) scale(0);
            transform: translateY(600px) rotateX(30deg) scale(0);
    -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0) rotateX(0) scale(1);
            transform: translateY(0) rotateX(0) scale(1);
    -webkit-transform-origin: 50% -1400px;
            transform-origin: 50% -1400px;
    opacity: 1;
  }
}
@keyframes slide-in-elliptic-bottom-fwd {
  0% {
    -webkit-transform: translateY(600px) rotateX(30deg) scale(0);
            transform: translateY(600px) rotateX(30deg) scale(0);
    -webkit-transform-origin: 50% 100%;
            transform-origin: 50% 100%;
    opacity: 0;
  }
  100% {
    -webkit-transform: translateY(0) rotateX(0) scale(1);
            transform: translateY(0) rotateX(0) scale(1);
    -webkit-transform-origin: 50% -1400px;
            transform-origin: 50% -1400px;
    opacity: 1;
  }
}
    </style>
</head>

<body>
    
<div class="container">
	<div class="screen">
		<div class="screen__content">
		<div class="container">
        <div class="row">
        <div class="col-md-4">
        </div>
            <div class="col-md-4">
            <br>
            <div class="card">
                <div class="card-header text-center">
                <div class="card-body">
			<iconify-icon icon="openmoji:mate" width="100px" height="100px"></iconify-icon>		            
			<form id="register" class="login" action="../../logica/Cusuarios.php" method="post">
				<h1>Matoros</h1>
                <div class="col">
					<i class="form-floating"></i>
					<input required type="text" class="form-control" name="username" placeholder="Nombre de usuario">
				</div>
				<div class="col">
					<i class="form-floating"></i>
					<input required type="text" class="form-control" name="email" placeholder="E-mail">
				</div>
                <div class="col">
					<i class="form-floating"></i>
					<input required type="number" class="form-control" name="telefono" placeholder="Teléfono">
				</div>
                <div class="col">
					<i class="form-floating"></i>
					<input required type="text" class="form-control" name="calle" placeholder="Dirección">
				</div>
                <div class="col">
					<i class="form-floating"></i>
					<input required type="number" class="form-control" name="callenum" placeholder="Altura">
				</div>
                <div class="col">
					<i class="form-floating"></i>
					<input required type="number" class="form-control" name="codigopostal" placeholder="Código Postal">
				</div>
                <div class="col">
					<i class="form-floating"></i>
					<input required type="password" class="form-control" íd="password" name="password" placeholder="Contraseña">
				</div>
				<div class="col">
					<i class="form-floating"></i>
					<input required type="password" class="form-control" íd="password_r" name="password_r" placeholder="Repetir Contraseña">
				</div><br>
				<button class="btn btn-warning">A matear!</button>
			</form>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>

</body>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</html>