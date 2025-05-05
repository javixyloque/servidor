<?php
session_start();
require_once'../modelo/Producto.php';
if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

if ($_SERVER['REQUEST_METHOD'] != 'POST' || !isset($_POST['nombre'], $_POST['precio'])) {
    
    header('Location: ../vista');
}
$carrito = $_SESSION['carrito'];
$nombre = strval($_POST['nombre']) ?? '';
$precio = floatval($_POST['precio']) ?? 0;
$verprods = boolval($_POST['verprods']) ?? false;



$productoEncontrado = false;

foreach ($carrito as $producto) {
    if ($producto['nombre'] == $nombre) {
        $productoEncontrado = true;
        break;
    }
}
if ($productoEncontrado) {
    // PASAR POR REFERENCIA PARA ACTUALIZAR EL ARRAY
    foreach ( $carrito as  &$producto) {
        if ($producto['nombre'] == $nombre) {
            $producto['cantidad']++;
            break;
        }
    }
    unset($producto);
} else {
    $carrito[] = [
        'nombre' => $nombre,
        'precio' => $precio,
        'cantidad' => 1
    ] ;
    
    $_SESSION['carrito'] = $carrito;
}

if ($verprods) {
    header('Location: ../vista/vista_carrito.php');
} else {
    header('Location: ../vista');
}
