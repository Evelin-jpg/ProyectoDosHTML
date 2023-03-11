<?php
    $nombre = $_GET["nombre"];
    $matricula = $_GET["matricula"];
    $correo = $_GET["correo"];
    $tabla = $_GET["tabla"];
    $puntuacion = $_GET["puntuacion"];

    $enlace = mysqli_connect("localhost", "root", "", "tec");
    $datos = "INSERT INTO alumno(Nombre,Matricula,Correo,Tabla,Puntuacion) VALUES (?,?,?,?,?)";
    
    $sentencia = mysqli_prepare($enlace,$datos);
    mysqli_stmt_bind_param($sentencia,"ssssi",$nombre,$matricula,$correo,$tabla,$puntuacion);
    if (mysqli_stmt_execute($sentencia)) {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: inicio.php");
        exit();
    }
    else {
        mysqli_stmt_close($sentencia);
        mysqli_close($enlace);
        header("Location: inicio.php");
        exit();
    }
?>