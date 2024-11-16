<?php
    include ("conexion.php");
    $conexion = conectar();
    $nombre = ucwords(filtrado($_POST['nombre']));
    // SI NO SE INSERTA TELEFONO, SE PONE UN VALOR VACIO,
    $telefono = isset($_POST['telefono']) ? intval(filtrado($_POST['telefono'])) : ' ';

    

    if (is_int($telefono)) {
        $insert = $conexion->prepare("INSERT INTO persona(nombre, telefono) VALUES (?, ?) ");
        $insert -> bind_param("si", $nombre, $telefono);

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
    




    function filtrado ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?> 