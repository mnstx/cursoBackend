<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Habilidades</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-light">
<div class="container-fluid">
  <a class="navbar-brand" href="../admin.php">Administrador</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</div>
</nav>
<h1>Ingrese los datos de la Habilidad:</h1>

    <form method="POST" action="createhabilidades.php" enctype="multipart/form-data">
        <label>Nombre</label>
        <input type="text" name="nombre" placeholder="Nombre" required>
        <label>Info</label>
        <input type="text" name="info" placeholder="Informacion sobre la habilidad" required>
        <label>Precio</label>
        <input type="text" name="precio" placeholder="Precio" required>
        <input type="submit" name="submit" value="Ingresar">
    </form>
    <?php
      $conexion = mysqli_connect("127.0.0.1", "root", "");
      mysqli_select_db($conexion, "pokestore");

      $nombre = $_POST ['nombre'];
      $info = $_POST['info'];
      $precio = $_POST['precio'];

      $consulta = "INSERT INTO habilidades(id,nombre,info,precio) VALUES(NULL,'$nombre','$info','$precio')";
      mysqli_query($conexion,$consulta);

       header('location: ../admin.php');

    ?>

</body>
</html>
