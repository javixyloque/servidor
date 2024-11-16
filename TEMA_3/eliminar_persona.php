<?php
    require('./conexion.php');
    $conexion = conectar();

    if (!isset($_GET['id_persona'])) {
        exit("No hay id de esa persona");
    }
    $id = $_GET['id_persona'];
    $consultaDel = $conexion-> prepare("DELETE FROM PERSONA WHERE id_persona = ?");
    
    $consultaDel ->bind_param("i", $id);
    $consultaDel -> execute();


?>