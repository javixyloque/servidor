<?php
session_start();
require_once'../controlador/controlador.php';

if (!isset($_SESSION['user'])) {
    header('Location: ../vista/index.php');
}

$nombre = filtrado($_POST['nombre']) ?? '';
$password = filtrado($_POST['password']) ?? '';



if (comprobarLogin($nombre, $password)) {
    $_SESSION['user'] = $nombre;
    
    header('Location: ../vista/transacciones.php');
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}
?>
