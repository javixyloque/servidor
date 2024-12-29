<?php
    require_once'../biblioteca/biblioteca.php';
    $conexion = conexion();

    if ($_SESSION['REQUEST_METHOD'] == 'POST') {
        $usuario = filtrado($_POST['usuario'])?? '';
        $password = filtrado($_POST['password'])?? '';
    }
?>