<?php
session_start();
require_once '../modelo/Producto.php';

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../vista');
    exit;
}

$carrito = $_SESSION['carrito'];
$nombre = strval($_POST['nombre']) ?? '';
$precio = floatval($_POST['precio']) ?? 0;

for ($i = 0; $i < count($carrito); $i++) {
    if ($carrito[$i]['nombre'] == $nombre && $carrito[$i]['cantidad']>1) {
        $carrito[$i]['cantidad']--;
        break;
    } else if ($carrito[$i]['nombre'] == $nombre && $carrito[$i]['cantidad']==1) {
        unset($carrito[$i]);
        break;
    }
}


$_SESSION['carrito'] = $carrito;
header('Location: ../vista/vista_carrito.php');








?>