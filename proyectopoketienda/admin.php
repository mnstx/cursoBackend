<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="admin.php">PokeStore</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <a class="navbar-brand" href="#"><?php echo $_SESSION ['usuario'];?></a>
        <a class="navbar-brand" href="login/logout.php">Salir</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<h1>Pokemons en stock:</h1>
<a href="create/createpokemons.php" class="btn btn-primary">Agregar Pokemon</a>
<br>
<div class="productos">

  <?php
  $conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
  mysqli_select_db($conexion, "eshos_33000341_pokestore");
  $consulta='SELECT * FROM pokemon';
  $datos= mysqli_query($conexion, $consulta);
  while ($reg=mysqli_fetch_array($datos)) { ?>

    <div class="card" style="width: 12rem;">
      <img src="data:image/png;base64, <?php echo base64_encode($reg['sprite'])?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo $reg['nombre']; ?></h5>
        <p class="card-text" hidden><?php echo $reg['id']; ?></p>
        <p class="card-text"><?php echo $reg['tipo']; ?></p>
        <p class="card-text">$<?php echo $reg['precio']; ?></p>
        <a href="update/updatepokemon.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Editar</a>
        <a href="delete/deletepokemons.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Borrar</a>

      </div>
    </div>

  <?php } ?>
</div>

    <h1>Objetos en stock:</h1>
    <a href="create/createobjetos.php" class="btn btn-primary">Agregar Objeto</a>
    <br>
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
            <a href="update/updateobjetos.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Editar</a>
            <a href="delete/deleteobjetos.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Borrar</a>

          </div>
        </div>

      <?php } ?>
    </div>

        <h1>Habilidades en stock:</h1>
        <a href="create/createhabilidades.php" class="btn btn-primary">Agregar Habilidades</a>
        <br>
        <div class="productos">

          <?php
          $conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
          mysqli_select_db($conexion, "eshos_33000341_pokestore");
          $consulta='SELECT * FROM habilidades';
          $datos= mysqli_query($conexion, $consulta);
          while ($reg=mysqli_fetch_array($datos)) { ?>

            <div class="card" style="width: 12rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo $reg['nombre']; ?></h5>
                <p class="card-text" hidden><?php echo $reg['id']; ?></p>
                <p class="card-text"><?php echo $reg['info']; ?></p>
                <p class="card-text">$<?php echo $reg['precio']; ?></p>
                <a href="update/updatehabilidades.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Editar</a>
                <a href="delete/deletehabilidades.php?id=<?php echo $reg['id'];?>" class="btn btn-primary">Borrar</a>

              </div>
            </div>

          <?php } ?>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
