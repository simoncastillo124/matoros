<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../../src/style.css">
</head>

<body>
    
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<iconify-icon icon="openmoji:mate" width="100px" height="100px"></iconify-icon>		            
			<form id="register" class="login" action="../../logica/Cusuarios.php" method="post">
				<h1>Matoros</h1>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="username" placeholder="Nombre de usuario">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="email" placeholder="Gmail">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" name="telefono" placeholder="NRO Telefono">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="text" class="login__input" name="calle" placeholder="calle">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" name="callenum" placeholder="NRO domcilio">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-user"></i>
					<input type="number" class="login__input" name="codigopostal" placeholder="CODIGO POSTAL">
				</div>
                <div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" íd="password" name="password" placeholder="Contraseña">
				</div>
				<div class="login__field">
					<i class="login__icon fas fa-lock"></i>
					<input type="password" class="login__input" íd="password_r" name="password_r" placeholder="Repetir Contraseña">
				</div>
				<button class="button login__submit" >
					<span class="button__text">A matear!</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
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