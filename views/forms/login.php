<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <div class="row">
        <div class="col-md-4">
        </div>
            <div class="col-md-4">
            <br><br><br><br>            
            <div class="card">
                <div class="card-header text-center">
                <div class="card-body">
                    <form method="POST" action="../../logica/auth.php">

                    <h3>Bienvenidos a matoros!</h3>

                    <div class="col">
                          <div class="form-floating">
                          <input required type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Escribe tu usuario">
                          <label>Usuario:</label>
                          </div>
                    </div>

                    <br> 


                    <div class="col">
                          <div class="form-floating">
                          <input required type="password" class="form-control" name="password" placeholder="Escribe tu contraseña">
                          <label>Contraseña:</label>
                    </div>

                    <br>
                    <div class="text-center">
                    <php if (isset($_GET["wep"])){ ?>
                    <h2 class="danger"> usuario o contraseña erroneo</h2>  
                    <?php  }?>
                    <button type="submit" class="btn btn-warning">A matear</button>
                    </div>
                    </form>
                    
                    

                </div>
            </div>    
        
        <br>
          </div>
        </div>
      </div>
  </body>
</html>