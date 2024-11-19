<?php
    include('./conexionPDO.php');
    $conexion = conexion();
    $sql = "DELETE FROM ALUMNOS WHERE nombre = :nombre;";
    
    $nombre = isset($_POST['nombre'])?filtrado($_POST['nombre']): '';
    try {
        $delete = $conexion ->prepare($sql);
        $delete -> bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $resultado = $delete -> execute();
        $numRows = $delete -> rowCount();
        if ($resultado) {
            switch ($numRows) {
                case 1:
                    echo "Se ha eliminado a $nombre.";
                    break;
                default:
                echo "Se han eliminado ". $numRows. " alumnos.";
                break;
            }

        } else {
            echo "No se ha podido eliminar el alumno.";
        }
    } catch (PDOException $e) {
        echo "Error: ". $e->getMessage();
    } finally {
        $conexion = null;
    }
    


?>