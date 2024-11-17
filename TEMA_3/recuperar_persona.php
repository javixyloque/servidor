<?php
    
    // CONECTAR BASE DE DATOS
    require("./conexion.php");
    $conexion = conectar();

    // CONSULTA
    $id = isset($_GET['id']) ? (int)filtrado($_GET['id']) : "";
    $consultaSelect = $conexion -> prepare("SELECT * FROM PERSONA WHERE id_persona=?");
    // RENOMBRAMOS LA ?
    $consultaSelect -> bind_param("i", $id);


    // EJECUTAMOS CONSULTA CON UN IF
    if ($consultaSelect -> execute()) {
        // SI LA CONSULTA FUNCIONA OBTENEMOS LA FILA REQUERIDA (ID ES CLAVE PRIMARIA)
        $resultado = $consultaSelect -> get_result();
        $lista = $resultado -> fetch_all(MYSQLI_ASSOC);
    

        
        if (!$lista) {
            exit("No hay resultados para el id introducido");
        } else {
            echo "Nombre: ". $lista['nombre']. "<br>";
            echo "Edad: ". $lista['apellidos']. "<br>";
            echo "Telefono: ". $lista['telefono']. "<br>";
        }

        
        
    } else {
        echo "Error al ejecutar la consulta: ". $conexion->error;
    }
    $resultado -> free();
    $conexion -> close();


?>