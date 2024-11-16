<?php
    
    // CONECTAR BASE DE DATOS
    require("./conexion.php");
    $conexion = conectar();

    // CONSULTA
    $id = $_GET['id'];
    $consultaSelect = $conexion -> prepare("SELECT * FROM PERSONA WHERE id_persona=?");
    // RENOMBRAMOS LA ?
    $consultaSelect -> bind_param("i", $id);


    // EJECUTAMOS CONSULTA CON UN IF
    if ($consultaSelect -> execute()) {
        // SI LA CONSULTA FUNCIONA OBTENEMOS LA FILA REQUERIDA (ID ES CLAVE PRIMARIA)
        $resultado = $consultaSelect -> get_result();
        $usuario = $resultado -> fetch_assoc();

        if (!$usuario) {
            exit("No hay resultados para el id introducido");
        } else {
            echo "Nombre: ". $usuario['nombre']. "<br>";
            echo "Edad: ". $usuario['apellidos']. "<br>";
            echo "Telefono: ". $usuario['telefono']. "<br>";
        }
    } else {
        echo "Error al ejecutar la consulta: ". $conexion->error;
    }
    $resultado -> free();
    $conexion -> close();


?>