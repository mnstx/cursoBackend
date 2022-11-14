<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="../index.php">PokeStore</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
</nav>

<div class="productos">

  <?php
  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "pokestore");
  $id = $_GET['id'];
  $consulta="SELECT * FROM pokemon WHERE id=$id";
  $datos= mysqli_query($conexion, $consulta);
  while ($reg=mysqli_fetch_array($datos)) { ?>

    <div class="card" style="width: 12rem;">
      <img src="data:image/png;base64, <?php echo base64_encode($reg['sprite'])?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $reg['nombre']; ?></h5>
        <p class="card-text" hidden><?php echo $reg['id']; ?></p>
        <p class="card-text"><?php echo $reg['tipo']; ?></p>
        <p class="card-text">$<?php echo $reg['precio']; ?></p>
        <br>
        <p>Pagar con:</p>
        <a href="#" class="btn btn-primary">MercadoPago</a>
        <a href="https://spectrocoin.com/en/integration/buttons/50307-qWMwXmE1ix.html" class="btn btn-primary">Bitcoin</a>
      </div>
    </div>

  <?php } ?>
</div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>
