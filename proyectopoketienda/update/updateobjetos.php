<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Objetos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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

<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "pokestore");
$id = $_GET['id'];
$consulta = "SELECT * FROM items WHERE id=$id";
$respuesta = mysqli_query($conexion, $consulta);
$datos=mysqli_fetch_array($respuesta);

        $nombre=$datos["nombre"];
        $generacion=$datos["generacion"];
        $precio=$datos["precio"];
        $sprite=$datos["sprite"];
        ?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos del objeto.</p>

        <form action="" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre" value="<?php echo "$nombre"; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Generacion</label>
            <input type="text" name="generacion" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Info" value="<?php echo "$generacion"; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio</label>
            <input type="text" name="precio" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Precio" value="<?php echo "$precio"; ?>">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sprite</label>
            <input type="file" name="sprite" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Imagen" value="<?php echo "$sprite"; ?>">
          </div>
          <button type="submit" class="btn btn-primary" name="guardar_cambios" value="Guardar Cambios">Guardar Cambios</button>
          <button type="submit" class="btn btn-primary" name="Cancelar" formaction="../admin.php">Cancelar</button>
        </form>
        <?php
        if(array_key_exists('guardar_cambios',$_POST)){
            $nombre=$_POST['nombre'];
            $generacion=$_POST['generacion'];
            $precio=$_POST['precio'];
            $sprite=addslashes(file_get_contents($_FILES['sprite']['tmp_name']));

            $consulta = "UPDATE items SET nombre='$nombre', generacion='$generacion', precio='$precio', sprite='$sprite' WHERE id =$id";
            mysqli_query($conexion,$consulta);

            header('location: ../admin.php');

        }?>


    </body>
</html>
