<!DOCTYPE html>
<html lang="es">
<head>
    <title>Editor De Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="background-color: #00BFFF; text-align: center; font-family: Italic; font-size: large; color:white">
  <center>
  <form action="Editar.php" method="get">
    <?php
    $editar = $_POST["editar"];
    echo '
    <input type="hidden" name="editar" value="'.$editar.'">'
    ?>
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="matricula">Matricula:</label><br>
    <input type="text" name="matricula" id="matricula"><br>
    <label for="correo">Correo:</label><br>
    <input type="text" name="correo" id="correo"><br>
    <label for="tabla">Tabla:</label><br>
    <input type="text" name="tabla" id="tabla"><br>
    <label for="puntuacion">Puntuacion:</label><br>
    <input type="text" name="puntuacion" id="puntuacion"><br>
    <input type="submit" value="Editar">
  </form>
  </center>
</body>
</html>