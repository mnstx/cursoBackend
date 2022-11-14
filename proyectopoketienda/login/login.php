<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
  </head>
    <body class="text-center">

      <?php
      $conexion = mysqli_connect("127.0.0.1", "root", "");
      mysqli_select_db($conexion, "pokestore");
      $consulta='SELECT * FROM user';
      $datos= mysqli_query($conexion, $consulta);
      $reg=mysqli_fetch_array($datos);
      ?>

    <main class="form-signin">
      <form action="login.php" method="post">
        <img class="mb-4" src="../img/pokeballlogo.png" alt="" width="100" height="100">
        <h1 class="h3 mb-3 fw-normal">Poke Store</h1>

        <div class="form-floating">
          <input type="text" name="usuario" class="form-control" id="floatingInput" placeholder="User">
          <label for="floatingInput">User</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" name="iniciarsesion" type="submit">Iniciar Sesion</button>
      </form>
    </main>
    <a href="registro.php">Registrarse</a>

    <?php
    if(array_key_exists('iniciarsesion',$_POST)){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];
        if ($usuario == $reg['usuario'] and $password == $reg['password']){
          header('location: ../admin.php');
        } else {
          echo "Los datos son incorrectos.";
        };

    }?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
