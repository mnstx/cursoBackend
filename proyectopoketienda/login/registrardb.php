<?php

$conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
mysqli_select_db($conexion, "eshos_33000341_pokestore");

$nombre = $_POST['nombre'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql_u = "SELECT * FROM user WHERE usuario='$nombre'";
$sql_e = "SELECT * FROM user WHERE email='$email'";
$res_u = mysqli_query($conexion, $sql_u);
$res_e = mysqli_query($conexion, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  echo "Este nombre de usuario ya esta en uso.";
      echo "<br><a href='registro.php'>Volver</a>";	
  	}else if(mysqli_num_rows($res_e) > 0){
  	  echo "Este email ya esta en uso";
      echo "<br><a href='login.php'>Iniciar Sesion</a>";	
  	}else{
        $registro = "INSERT INTO user (id, usuario, password, email) VALUES (NULL, '$nombre', '$password', '$email')";
        $result = mysqli_query($conexion, $registro);
        echo "Registro exitoso";
        exit();
  	};
?>
