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
        $sprite=$datos["sprite"];?>

        <h2>Modificar</h2>
        <p>Ingrese los nuevos datos del objeto.</p>

        <form action="" method="POST" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" value="<?php echo "$nombre"; ?>"
            <label>Generacion</label>
            <input type="text" name="generacion" placeholder="Generacion" value="<?php echo "$generacion"; ?>">
            <label>Precio</label>
            <input type="text" name="precio" placeholder="Precio" value="<?php echo "$precio"; ?>">
            <label>Imagen</label>
            <input type="file" name="sprite" placeholder="Imagen">
            <input type="submit" name="guardar_cambios" value="Guardar Cambios">
            <button type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
        </form>
        <?php
        if(array_key_exists('guardar_cambios',$_POST)){
            $nombre=$_POST['nombre'];
            $generacion=$_POST['generacion'];
            $precio=$_POST['precio'];
            $sprite=addslashes(file_get_contents($_FILES['sprite']['tmp_name']));

            $consulta = "UPDATE items SET nombre='$nombre', generacion='$generacion', precio='$precio', sprite='$sprite' WHERE id =$id";
            mysqli_query($conexion,$consulta);

            header('location: ../listar/listarobjetos.php');

        }?>


    </body>
</html>
