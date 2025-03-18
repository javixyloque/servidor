<?php
    require_once'./controlador.php';
    $conexion = conectar();
    
    $sql = "INSERT INTO director (dni, nombre, apellido, fecha_nac, foto, activo) 
    VALUES (:dni, :nombre, :apellido, :fecha_nac, :foto, 1)";
    try {
        $stmt = $conexion->prepare($sql);
        $stmt->bindParam(':dni', intval($dni), PDO::PARAM_STR);
        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $apellido, PDO::PARAM_STR);
        $stmt->bindParam(':fecha_nac', $fecha_nac, PDO::PARAM_STR);
        $stmt->bindParam(':foto', $foto, PDO::PARAM_LOB);
        $stmt->execute();
        $conexion = null;
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    } finally {
        header('location: ../vista/directores.php')
    }


?>