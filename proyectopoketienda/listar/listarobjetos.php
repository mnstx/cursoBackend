<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="../index.php">PokeStore</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Filtrar
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="listarpokemons.php">Pokemons</a></li>
          <li><a class="dropdown-item" href="listarobjetos.php">Objetos</a></li>
          <li><a class="dropdown-item" href="listarhabilidades.php">Habilidades</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
</nav>

<h1>Objetos en stock:</h1>
<div class="productos">

        <?php
        $conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
        mysqli_select_db($conexion, "eshos_33000341_pokestore");
        $consulta='SELECT * FROM items';
        $datos= mysqli_query($conexion, $consulta);
        while ($reg=mysqli_fetch_array($datos)) { ?>

          <div class="card" style="width: 12rem;">
            <img src="data:image/png;base64, <?php echo base64_encode($reg['sprite'])?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $reg['nombre']; ?></h5>
              <p class="card-text" hidden><?php echo $reg['id']; ?></p>
              <p class="card-text"><?php echo $reg['generacion']; ?></p>
              <p class="card-text">$<?php echo $reg['precio']; ?></p>
              <a href="../detalle/detalleproductoit.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Detalles</a>
              <br>
              <p>Pagar con:</p>
              <a href="https://mpago.la/25W9n3y" target="_blank" class="btn btn-primary">MercadoPago</a>
              <a href="https://spectrocoin.com/en/integration/buttons/50307-qWMwXmE1ix.html" target="_blank" class="btn btn-primary">Bitcoin</a>

            </div>
          </div>

        <?php } ?>

      </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
    </html>
