<?php

$carrito = $_SESSION['carrito'] ?? [];

$nombre = $_POST['nombre'] ?? '';
$precio  = $_POST['precio'] ?? '';

$encontrado = false;

// Recorremos el carrito
foreach ($carrito as &$producto) {
    if ($producto[0] === $nombre) {
        $producto[2]++; // Sumamos cantidad
        $encontrado = true;
        break;
    }
}
unset($producto); // Rompemos referencia

// Si no se encontró, añadimos nuevo producto
if (!$encontrado) {
    $nuevoProducto = [$nombre, $precio, 1]; // nombre, precio, cantidad
    $carrito[] = $nuevoProducto;
}

// Guardamos en sesión
$_SESSION['carrito'] = $carrito;

// Redirigimos
header("Location: ../vista/");

?>