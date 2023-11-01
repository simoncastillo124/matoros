<!doctype html>
<html lang="en" data-bs-theme="auto">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Product example · Bootstrap v5.3</title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
        <link href="../src/bootstrap.min.css" rel="stylesheet">
        <link href="../src/productos/product.css" rel="stylesheet">
        <link href="../src/index/index.css" rel="stylesheet">
        <?php include("nav.php");
$sql="SELECT * FROM producto";
if(!$result= mysqli_query($conx,$sql)) die("consulta fallida");
?>
    
    
  </head>
  <body>

    </div>
    </div>
<main>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-body-tertiary"  style="background-image: url('../src/matesfondo.jpg');">
    <div class="col-md-6 p-lg-5 mx-auto my-5">
      <h1 class="display-3 fw-bold">Matoros</h1>
      <h4 class="fw-normal text-muted mb-3">Los mejores mates, al mejor precio.</h4>
      <div class="d-flex gap-3 justify-content-center lead fw-normal">
      </div>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
  <div class="row">
  <?php
  while ($fila = mysqli_fetch_assoc($result)) {
  ?>
    <div class="col-md-4">
      <div class="d-md-flex flex-md-equal w-200 my-md-3 ps-md-3">
        <div class="text-bg-secondary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden" style="border-radius: 21px;">
          <div class="my-3 py-3">
            <h2 class="display-5"><?php echo $fila["nombre"] ?><br></h2>
            <p class="lead">$<?php echo $fila["precio"] ?></p>
          </div>
          <div class="bg-body-tertiary shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;">
            <?php
            echo '<img class="card-img-top" src=" "' . base64_encode($fila["imagen"]) . '" alt="producto" />';
            ?>
          </div>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</div>
</main>

<?php include ("footer.php");?>