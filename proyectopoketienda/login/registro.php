<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
  </head>
  <body>
    <h1>Ingrese los datos:</h1>

        <form method="POST" action="registrardb.php" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" required>
            <label>Contrasena</label>
            <input type="password" name="password" placeholder="Contrasena" required>
            <input type="submit" name="submit" value="Registrar">
        </form>

  </body>
</html>
