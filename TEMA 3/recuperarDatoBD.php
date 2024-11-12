<?php
    
    // CONECTAR BASE DE DATOS
    require("./conexion.php");
    $conexion = conectar();

    // CONSULTA
    $id = $_GET['id'];
    $consultaSelect = $conexion -> prepare("SELECT * FROM EDITORIAL WHERE id_editorial=?");
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

        }
    }
    $resultado -> free();
    $conexion -> close();


?>