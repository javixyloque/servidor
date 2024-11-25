<?php
    include('./conexionPDO.php');
    $conexion = conexion();

    try {
        $sql = "SELECT * FROM PERSONA";

        $sentencia = $conexion -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_ASSOC);
        $sentencia -> execute();


        while ($fila = $sentencia->fetch()) {
            echo "ID: ".$fila["id_persona"]. " <br>";
            echo "Nombre: ".$fila["nombre"]. " <br>";
        }
    } catch (PDOException $e) {
        echo $e ->getMessage();
    } finally {
        $conexion = null;
    }

?>