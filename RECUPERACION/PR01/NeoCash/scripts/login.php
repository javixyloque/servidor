<?php
session_start();
require_once'../controlador/controlador.php';

$nombre = filtrado($_POST['nombre']) ?? '';
$password = filtrado($_POST['password']) ?? '';



if (comprobarLogin($nombre, $password)) {
    $_SESSION['user'] = $nombre;
    
    echo "<script>alert('Bienvenido de nuevo,".$_SESSION['user']."')</script>";
    header('Location: ../vista/transacciones.php');
} else {
    echo "<script>alert('Nombre de usuario o contraseña incorrectos');
        window.location.href = '../vista/index.php';
    </script>";
}
?>
