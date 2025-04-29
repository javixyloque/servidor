<?php
session_start();

if (!isset($_SESSION['carrito']) || !is_array($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}   

$carrito = $_SESSION['carrito'];
$nombre = $_POST['nombre'];
$precio = floatval($_POST['precio']);



$productoEncontrado = false;
foreach ($carrito as $key => $producto) {
    if ($producto['nombre'] === $nombre) {
        // SI CANTIDAD > 1 => RESTAR 1
        if ($producto['cantidad'] > 1) {
            $carrito[$key]['cantidad']--;
        } else {
            // SI CANTIDAD = 1 => ELIMINAR PRODUCTO
            unset($carrito[$key]);
        }
        $productoEncontrado = true;
    }
}

// GUARDAR CARRITO ACTUALIZADO
$_SESSION['carrito'] = $carrito;

// REDIRIGIR A LA PAGINA DEL CARRITO
header("Location: ../vista/carrito.php");
exit();

