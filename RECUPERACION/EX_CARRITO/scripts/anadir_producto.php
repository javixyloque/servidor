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
$verprods = boolval($_POST['verprods']) ?? false;



foreach ($carrito as $nomProd => $producto) {
    if ($nombre == $nomProd) {
        $productoEncontrado = true;
        break;
    }
}
if (!$productoEncontrado) {
    $carrito[$nombre] = [
        'precio' => $precio,
        'cantidad' => 1
    ];
} else {
    foreach ($carrito as $nomProd => &$producto) {
        if ($nomProd == $nombre) {
            $producto['cantidad']++;
            break;
        }
    }
}

$_SESSION['carrito'] = $carrito;

if ($verprods) {
    header('Location: ../vista/vista_carrito.php');
} else {
    header('Location: ../vista');
}
