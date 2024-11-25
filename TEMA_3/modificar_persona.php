<?php
    require('./conexion.php');
    $conexion = conectar();
    $id = isset($_POST['id_persona'])? (int)filtrado($_POST['id_persona']): "";
    $nombre = isset($_POST['nombre'])? filtrado($_POST['nombre']): "";

    $consulta = $conexion->prepare("UPDATE PERSONA SET nombre=? WHERE id_persona=?");
    $consulta->bind_param("si", $nombre, $id);
    $consulta ->execute();

    header("Location: listar_personas.php");
    $consulta -> free_result();
    $conexion ->close();

    
?>