<?php
  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "pokestore");
  $id = $_GET['id'];
  $consulta = "DELETE FROM `items` WHERE `id`=$id";
  mysqli_query($conexion,$consulta);
  header('location: ../admin.php');
?>
