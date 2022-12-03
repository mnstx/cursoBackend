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
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" placeholder="" class="form-control" id="exampleInputEmail1" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Info</label>
        <input type="textarea" name="info" placeholder="" class="form-control" id="exampleInputEmail1" required>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Precio</label>
        <input type="text" name="precio" placeholder="" class="form-control" id="exampleInputEmail1" required>
    </div>
    
        <input type="submit" name="submit" value="Ingresar" class="btn btn-primary">
        <a href="../admin.php" class="btn btn-primary">Cancelar</a>
    </form>
    <?php
    
      $conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
      mysqli_select_db($conexion, "eshos_33000341_pokestore");

      $nombre = $_POST ['nombre'];
      $info = $_POST['info'];
      $precio = $_POST['precio'];
      
      if(array_key_exists('submit',$_POST)){
            $nombre=$_POST['nombre'];
            $tipo=$_POST['info'];
            $precio=$_POST['precio'];
            $sprite=addslashes(file_get_contents($_FILES['img']['tmp_name']));

            $consulta = "INSERT INTO habilidades(id,nombre,info,precio) VALUES(NULL,'$nombre','$info','$precio')";
            mysqli_query($conexion,$consulta);

            header('location: ../admin.php');

        }?>

</body>
</html>
