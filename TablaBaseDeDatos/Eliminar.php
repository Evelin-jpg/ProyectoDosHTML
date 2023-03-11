<?php
    $borrar = $_POST["borrar"];
        
    $enlace = mysqli_connect("localhost", "root", "", "tec");
    $datos = "DELETE FROM `alumno` WHERE IdAlumno=".$borrar.";";
    
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