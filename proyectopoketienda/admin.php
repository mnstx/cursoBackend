<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php">PokeStore</a>
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
          <li><a class="dropdown-item" href="listar/listarpokemons.php">Pokemons</a></li>
          <li><a class="dropdown-item" href="listar/listarobjetos.php">Objetos</a></li>
          <li><a class="dropdown-item" href="listar/listarhabilidades.php">Habilidades</a></li>
        </ul>
      </li>
        <a class="navbar-brand" href="index.php">Administrar</a>
      </li>
    </ul>
  </div>
</div>
</nav>

<h1>Pokemons en stock:</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>POKEMON</th>
        <th>TIPO</th>
        <th>IMAGEN</th>
        <th>PRECIO</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
    <a href="create/createpokemons.php">Agregar Pokemon</a>

    <?php
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "pokestore");
    $consulta='SELECT * FROM pokemon';
    $datos= mysqli_query($conexion, $consulta);
    while ($reg=mysqli_fetch_array($datos)) { ?>
        <tr>
        <td><?php echo $reg['id']; ?></td>
        <td><?php echo $reg['nombre']; ?></td>
        <td><?php echo $reg['tipo']; ?></td>
        <td><img src="data:image/png;base64, <?php echo base64_encode($reg['sprite'])?>" alt="" width="50px" height="50px"></td>
        <td><?php echo $reg['precio']; ?></td>
        <td><a href="update/updatepokemon.php?id=<?php echo $reg['id'];?>">Editar</a></td>
        <td><a href="delete/deletepokemons.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
        </tr>
    <?php } ?>
    </table>

    <h1>Objetos en stock:</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>GENERACION</th>
            <th>IMAGEN</th>
            <th>PRECIO</th>
            <th>EDITAR</th>
            <th>BORRAR</th>
        </tr>
        <a href="create/createobjetos.php">Agregar Objeto</a>

        <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "pokestore");
        $consulta='SELECT * FROM items';
        $datos= mysqli_query($conexion, $consulta);
        while ($reg=mysqli_fetch_array($datos)) { ?>
            <tr>
            <td><?php echo $reg['id']; ?></td>
            <td><?php echo $reg['nombre']; ?></td>
            <td><?php echo $reg['generacion']; ?></td>
            <td><img src="data:image/png;base64, <?php echo base64_encode($reg['sprite'])?>" alt="" width="50px" height="50px"></td>
            <td><?php echo $reg['precio']; ?></td>
            <td><a href="update/updateobjetos.php?id=<?php echo $reg['id'];?>">Editar</a></td>
            <td><a href="delete/deleteobjetos.php?id=<?php echo $reg['id'];?>">Borrar</a></td>

            </tr>
        <?php } ?>
        </table>
        <h1>Habilidades en stock:</h1>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>INFO</th>
                <th>PRECIO</th>
                <th>EDITAR</th>
                <th>BORRAR</th>
            </tr>
            <a href="create/createhabilidades.php">Agregar Habilidad</a>

            <?php
            $conexion = mysqli_connect("127.0.0.1", "root", "");
            mysqli_select_db($conexion, "pokestore");
            $consulta='SELECT * FROM habilidades';
            $datos= mysqli_query($conexion, $consulta);
            while ($reg=mysqli_fetch_array($datos)) { ?>
                <tr>
                <td><?php echo $reg['id']; ?></td>
                <td><?php echo $reg['nombre']; ?></td>
                <td><?php echo $reg['info']; ?></td>
                <td><?php echo $reg['precio']; ?></td>
                <td><a href="update/updatehabilidades.php?id=<?php echo $reg['id'];?>">Editar</a></td>
                <td><a href="delete/deletehabilidades.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
                </tr>
            <?php } ?>
            </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
