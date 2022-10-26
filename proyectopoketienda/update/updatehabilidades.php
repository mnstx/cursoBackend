<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "pokestore");
$id = $_GET['id'];
$consulta = "SELECT * FROM habilidades WHERE id=$id";
$respuesta = mysqli_query($conexion, $consulta);
$datos=mysqli_fetch_array($respuesta);

        $nombre=$datos["nombre"];
        $info=$datos["info"];
        $precio=$datos["precio"];?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos de la habilidad.</p>

        <form action="" method="POST" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>"
            <label>Info</label>
            <input type="text" name="info" placeholder="Info" value="<?php echo "$info"; ?>">
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
        </form>
        <?php
        if(array_key_exists('guardar_cambios',$_POST)){
            $nombre=$_POST['nombre'];
            $info=$_POST['info'];
            $precio=$_POST['precio'];

            $consulta = "UPDATE habilidades SET nombre='$nombre', info='$info', precio='$precio' WHERE id =$id";
            mysqli_query($conexion,$consulta);

            header('location: ../listar/listarhabilidades.php');

        }?>


    </body>
</html>
