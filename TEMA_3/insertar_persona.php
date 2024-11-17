<?php
    include ("conexion.php");
    $conexion = conectar();
    $nombre = ucwords(filtrado($_POST['nombre']));
    $apellidos = isset($_POST['apellidos']) ? filtrado(ucwords($_POST['apellidos'])) : '';
    // SI NO SE INSERTA TELEFONO, SE PONE UN VALOR VACIO,
    $telefono = isset($_POST['telefono']) ? intval(filtrado($_POST['telefono'])) : ' ';

    

    if (is_int($telefono)) {
        $insert = $conexion->prepare("INSERT INTO persona(nombre, apellidos, telefono) VALUES (?, ?, ?) ");
        $insert -> bind_param("ssi", $nombre,$apellidos, $telefono);

        if ($insert->execute()) {
            header("Location: listar_personas.php");
        } else {
            echo "Ha ocurrido un error, intentelo de nuevo";
            header("Location: insertar_persona.html");
        }
        $conexion->close();
    } else {
        echo "El número de teléfono debe ser un número entero";
        header("Location: insertar_persona.html");
    }
    




    
?> 