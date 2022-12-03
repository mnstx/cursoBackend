<?php
  $conexion = mysqli_connect("sql101.eshost.com.ar", "eshos_33000341", "manu1992");
  mysqli_select_db($conexion, "eshos_33000341_pokestore");
  $id = $_GET['id'];
  $consulta = "DELETE FROM `pokemon` WHERE `id`=$id";
  mysqli_query($conexion,$consulta);
  header('location: ../admin.php');
?>
