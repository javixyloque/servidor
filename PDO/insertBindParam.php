<?php
    include('./conexionPDO.php');
    $conexion = conexion();
    $sql = "INSERT INTO ALUMNOS (nombre, apellido1) VALUES (:nombre, :apellido)";
    
    $nombre = isset($_POST['nombre']) ?filtrado($_POST['nombre']): '';
    $apellido = isset($_POST['apellido'])?filtrado($_POST['apellido']): '';

    try {
        $insert = $conexion ->prepare($sql);
        // ES COMO PASAR POR REFERENCIA, SE VAN A CAMBIAR
        $insert ->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $insert ->bindParam(':apellido', $apellido, PDO::PARAM_STR);

        //BIND VALUE ES COMO PASAR POR COPIA, NO SE VAN A CAMBIAR
        // $insert ->bindValue(':nombre', $nombre, PDO::PARAM_STR);
        // $insert ->bindValue(':apellido', $apellido, PDO::PARAM_STR);

        if ($insert->execute()) {
            echo "Alumno insertado correctamente";
        } else {
            echo "Error al insertar alumno: ". print_r($insert->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    } finally {
        $conexion = null;
    }
    


    
?>
