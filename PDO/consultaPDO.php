<?php
    include('./conexionPDO.php');
    $conexion = conexion();

    try {
        $sql = "SELECT * FROM ALUMNOS";

        $sentencia = $conexion -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();


        while ($fila = $sentencia->fetch()) {
            echo "ID: ".$fila["id_alumno"]. " <br>";
            echo "Nombre: ".$fila["nombre"]. " <br>";
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    }

?>