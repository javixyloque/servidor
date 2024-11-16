<?php
    include ("conexion.php");
    $conexion = conectar();
    $nombre=$_POST['nombre'];
    $telefono = $_POST['telefono'];

    $insert = $conexion->prepare("INSERT INTO editorial(nombre, telefono) VALUE (?, ?) ");
    $insert -> bind_param("si", $nombre, $telefono);

    if ($insert->execute()) {
        header("Location: listar_personas.php");
    } else {
        echo "Ha ocurrido un error, intentelo de nuevo";
        header("Location: insertar_persona.html");
    }
    $conexion->close();
?> 