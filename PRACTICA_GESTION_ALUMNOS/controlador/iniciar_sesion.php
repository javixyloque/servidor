<?php
    require_once'../biblioteca/biblioteca.php';
    session_start();
    $conexion = conexion();

    if ($_SESSION['REQUEST_METHOD'] == 'POST') {
        $usuario = filtrado($_POST['usuario'])?? '';
        $password = filtrado($_POST['password'])?? '';
    }

    $sql = "SELECT * FROM `tutor` WHERE login = :login  AND password = :password;";
    try {
        
        $select = $conexion->prepare($sql);
        $select->bindParam(':login', $usuario, PDO::PARAM_STR);
        $select->bindParam(':password', $password, PDO::PARAM_STR);
        if ($select->execute()) {
            $_SESSION['login'] = $usuario;
            header('Location:../vista/index.php');
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
?>