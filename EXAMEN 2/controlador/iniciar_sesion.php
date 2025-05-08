<?php
    require_once '../conexion/conexion.php';
    $conexion = conexion();

    $nombre = isset($_POST['username'])? filtrado($_POST['username']): '';
    $pin = isset($_POST['password'])? filtrado($_POST['password']): '';
    try {
        $select =$conexion->prepare( "SELECT * FROM usuarios WHERE  nombre = :nombre AND usuarios.PIN = :password");


        $select->bindParam(':nombre', $nombre, PDO::PARAM_STR);
        $select->bindParam(':password', $pin, PDO::PARAM_STR);
        $resultado = $select->execute();
        $numFilas = $select->rowCount();
        if ($numFilas > 0) {
            header("Location:../vista/lista.php");
            
        } else {
            header("Location:../vista");
        } 
    
        if ($resultado) {
            header("Location:../vista/lista.php");
        } else {
            echo "Nombre de usuario o contraseña incorrectos, intentelo de nuevo";
        }
    } catch (PDOException $e) {
        echo "Error: ".$e->getMessage();
    } finally {
        $conexion = null;
    }
?>