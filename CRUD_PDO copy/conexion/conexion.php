<?php
    function conexion () {
        $servidor = 'mysql:dbname=supermoda_javier;host=localhost';
        $usuario ='root';
        $pw = '';


        try {
            $conexion = new PDO($servidor, $usuario, $pw);
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (PDOException $e) {
            echo 'Falló la conexión: '. $e->getMessage();

        }
    }
    
    
?>