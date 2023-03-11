<?php
    $editar = $_GET["editar"];
    $nombre = $_GET["nombre"];
    $matricula = $_GET["matricula"];
    $correo = $_GET["correo"];
    $tabla = $_GET["tabla"];
    $puntuacion = $_GET["puntuacion"];
    $enlace = mysqli_connect("localhost", "root", "", "tec");
    $datos = "UPDATE alumno SET Tabla='$tabla',Nombre='$nombre',Correo='$correo',Puntuacion='$puntuacion',Matricula='$matricula' WHERE IdAlumno = '$editar'";

    if ($enlace->query($datos) == TRUE) {
        $enlace->close();
        header("Location: inicio.php");
        exit();
    } else {
        $enlace->close();
        header("Location: inicio.php");
        exit();
    }
?>