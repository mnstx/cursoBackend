<?php

$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "pokestore");
$consulta = 'SELECT * FROM user';
$datos = mysqli_query($conexion, $consulta);
$reg = mysqli_fetch_array($datos);

$nombre = $_POST['nombre'];
$password = $_POST['password'];
$email = $_POST['email'];

$registro = "INSERT INTO user (id, usuario, password, email) VALUES (NULL, '$nombre', '$password', '$email')";
$result = mysqli_query($conexion, $registro);
echo "Registro exitoso";

?>
