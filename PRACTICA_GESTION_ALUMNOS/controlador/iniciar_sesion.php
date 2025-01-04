<?php
    require_once'../biblioteca/biblioteca.php';
    session_start();
    $conexion = conexion();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = filtrado($_POST['usuario'])?? '';
        $password = filtrado($_POST['password'])?? '';
    }
    

    //NO HAY HASH PORQUE INTRODUJE LOS DATOS ANTES DE CAER EN ELLO
    $sql = "SELECT * FROM `tutor` WHERE login = :login  AND password = :password;";
    try {
        
        $select = $conexion->prepare($sql);
        $select->bindParam(':login', $usuario, PDO::PARAM_STR);
        $select->bindParam(':password', $password, PDO::PARAM_STR);
        if ($select->execute()) {
            $_SESSION['login'] = $usuario;
            header('Location:../vista/index.php');
            $conexion = null;
        }
    } catch (PDOException $e) {
        echo "<script>alert('O el usuario que buscabas no estaba, o algo estás haciendo mal, prueba de nuevo');
        location.reload();
        </script>";
    }
?>