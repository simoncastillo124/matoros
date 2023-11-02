<?php include("nav.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="../src/bootstrap.min.css" rel="stylesheet">
    <link href="../src/carrito/carrito.css" rel="stylesheet">
    <script src="../src/carrito/carrito.js"></script>





</head>


<body class="bg-body-tertiary">
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Mi carrito</h2>
      <p class="lead">A unos simples pasos de tener tu mate.</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Tu carrito</span>
          <!-- CANTIDAD De productos -->
          <span class="badge bg-primary rounded-pill"></span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <!-- NOMBRE DEL PRODUCTO -->
              <h6 class="my-0"></h6>

              <!-- Descripcion -->
              <small class="text-body-secondary">Descripción</small>
            </div>
            <!-- Preciooo -->
            <span class="text-body-secondary">$12</span>
          </li>


          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Codigo de Promoción</h6>
              <small>EXAMPLECODE</small>
            </div>
            <!-- Codigo de descuento -->
            <span class="text-success"></span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <!-- ACA VA EL VALOR total -->
            <strong></strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Recordar</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Dirección de envio:</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primer nombre:</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                    Necesitas ingresar nombre.
            </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Apellido:</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                    Necesitas ingresar apellido.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nombre de usuario:</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Validar nombre de usuario.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email: <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Por favor ingresa un Email valido.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Dirección:</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Por favor ingresa tu dirección.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Dirección 2 <span class="text-body-secondary">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="">
            </div>


            <div class="col-md-3">
              <label for="zip" class="form-label">CP:</label>
              <input type="text" class="form-control" id="zip" placeholder="1234" required>
              <div class="invalid-feedback">
                Codigo postal requerido.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación.</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Guarda esta información para la próxima vez.</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Pago</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Tarjeta de credito</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Tarjeta de debito</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Mercado pago</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Numero de tarjeta</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Nombre completo como se muestra en la tarjeta.</small>
              <div class="invalid-feedback">
              Se requiere el nombre en la tarjeta
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Número de Tarjeta de Crédito</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
              Se requiere número de tarjeta de crédito              
            </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Expiración</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
              Fecha de vencimiento requerida              
            </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
              Se requiere código de seguridad              
            </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continuar a la comprobación</button>
        </form>
        <br>
      </div>
    </div>
  </main>
</div>
<?php include("footer.php")?>
