<?php

    $conexion=mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "tienda_de_ropa");

    $marca = $_POST['marca'];
    $tipo_de_prenda = $_POST['tipo_de_prenda'];
    $talle = $_POST['talle'];
    $precio = $_POST['precio'];
    $img = $_POST['img'];

    if (isset($_POST['enviar'])){
      $consulta = "INSERT INTO ropa(marca, tipo_de_prenda, talle, precio, img) VALUES ('$marca', '$tipo_de_prenda', '$talle', '$precio', '$img')";
      $resultado = mysqli_query($consulta,$conexion);
        if ($resultado){
          ?>
          <h1>Se agrego el articulo!</h1>
          <?php
        else {
          ?>
          <h1>Ups ocurrio un error!</h1>
          <?
        }
        }
    };

?>
