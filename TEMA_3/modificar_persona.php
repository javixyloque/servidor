<?php
    require('./conexion.php');
    $conexion = conectar();
    $id = $_POST['id_persona'];
    $nombre = $_POST['nombre'];

    $consulta = $conexion->prepare("UPDATE PERSONA SET nombre=? WHERE id_persona=?");
    $consulta->bind_param("si", $nombre, $id);
    $consulta ->execute();
?>