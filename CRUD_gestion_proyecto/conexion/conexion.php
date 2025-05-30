<?php
    function conexion () {
        $servidor = 'mysql:dbname=gestion_alumnos;host=localhost';
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
    
    function filtrado ($data) {
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
?>