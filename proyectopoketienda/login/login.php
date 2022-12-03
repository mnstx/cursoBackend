<?php
    session_start();
    $conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
    mysqli_select_db($conexion, "eshos_33000341_pokestore");
    
    if(array_key_exists('iniciarsesion',$_POST)){
        $usuario=$_POST['usuario'];
        $password=$_POST['password'];

        $consulta="SELECT * FROM user WHERE usuario = '$usuario' AND password = '$password'";
        $datos = mysqli_query($conexion, $consulta);
        $reg = mysqli_fetch_array($datos);

        if ($usuario == $reg['usuario'] and $password == $reg['password']){
            $_SESSION ['usuario'] = $usuario;
            header('location: ../admin.php');
        }else{
            echo "Datos Incorrectos.";
        };
    };
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poke Store</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'><link rel="stylesheet" href="./style.css">
    <title>Login</title>
  </head>
    <body>

    <div class="login-form">
  <form action="login.php" method="post">
    <h1>Login</h1>
    <div class="content">
      <div class="input-field">
        <input type="usuario" name="usuario" placeholder="Usuario" required>
      </div>
      <div class="input-field">
        <input type="password" name="password" placeholder="Password" required>
      </div>
    </div>
    <div class="action">
      <button name="iniciarsesion" type="submit">Iniciar Sesion</button>
    </div>
  </form>
  <div class="action">
    <form action="registro.php">
         <button type="submit">Registrarse</button>
    </form>
  </div>
</div>

    </body>
</html>