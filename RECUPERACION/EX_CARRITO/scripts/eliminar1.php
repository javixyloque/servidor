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


foreach($carrito as $nomProd => &$producto) {
    if ($nomProd === $nombre && $producto['cantidad']>1) {
        $producto['cantidad']--;

    } else if ($nomProd === $nombre && $producto['cantidad'] === 1 ) {
        unset($carrito[$nombre]);
    }
}



$_SESSION['carrito'] = $carrito;
header('Location: ../vista/vista_carrito.php');








?>