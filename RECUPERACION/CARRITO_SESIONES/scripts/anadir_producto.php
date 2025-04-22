<?php
session_start(); // Añadir esto al inicio
require_once'../modelo/Producto.php';
require_once'../controlador/controlador.php';


$carrito = json_decode($_SESSION['carrito']) ?? [];
if (!is_array($carrito)) {
    $carrito = json_decode($_SESSION['carrito']);
}
$nombre = $_POST['nombre'] ?? '';
$precio = $_POST['precio'] ?? '';
$encontrado = false;

// Recorremos el carrito
foreach ($carrito as &$producto) {
    // SI ENCUENTRA => SUMAMOS 1 DE CANTIDAD AL PRODUCTO Y SALIMOS
    if ($producto->getNombre() === $nombre) {
        $cantidad = $producto->getCantidad();
        $cantidad++;
        $producto->setCantidad($cantidad); 
        $encontrado = true;
        break;
    }
}
// unset($producto); 

// SI NO ENCONTRADO => AÑADIMOS NUEVO PRODUCTO
if (!$encontrado) {
    $nuevoProducto = new Producto($nombre, $precio); 
    array_push($carrito, $nuevoProducto);
}


// GUARDAR => JSON_PRETTY_PRINT FORMATEA JSON
$_SESSION['carrito'] = json_encode($carrito);
print_r($_SESSION['carrito']);

header("Location: ../vista/index.php");
exit(); 







?>