<?php
    include('./conexionPDO.php');
    $conexion = conexion();
    $nombre_old = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $nombre_new = isset($_POST['nombre_new'])? $_POST['nombre_new'] : '';
    $sql = 'UPDATE PERSONA SET NOMBRE = :nombre_new WHERE NOMBRE = :nombre_old';
    
    try {

        $update = $conexion -> prepare($sql);
        $update -> bindParam(':nombre_new', $nombre_new, PDO::PARAM_STR);
        $update -> bindParam(':nombre_old', $nombre_old, PDO::PARAM_STR);
        $resultado  = $update -> execute();
        if ($resultado) {
            echo 'Persona modificada correctamente';
        } else {
            echo 'Error al modificar la persona';
        }
    } catch (PDOException $e) {

        echo "Error: ". $e->getMessage();
    } finally {
        // $resultado -> free();
        $conexion = null;
        
    }

?>