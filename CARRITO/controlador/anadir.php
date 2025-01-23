<?php
require_once './controlador.php';
require_once '../modelo/Producto.php';

// COMPROBAR LA REQUEST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // ASIGNACIÓN DE VARIABLES
    $carrito = isset($_COOKIE['carrito']) ? json_decode($_COOKIE['carrito'], true) : [];
    $acumulado = isset($_COOKIE['acumulado']) ? floatval($_COOKIE['acumulado']) : 0;
    $nombreProd = isset($_POST['nombreProd']) ? filtrado($_POST['nombreProd']) : '';

    // BUCLE PARA BUSCAR EL PRODUCTO EN EL ARRAY
    foreach ($productos as $producto) {
        if ($producto->getNombre() == $nombreProd) {
            // Añadir producto como array asociativo con nombre y precio
            $productoNuevo = [
                'nombre' => $producto->getNombre(),
                'precio' => $producto->getPrecio()
            ];
            array_push($carrito, $productoNuevo);
            $acumulado += $producto->getPrecio();
            break;
        }
    }

    // Actualizar las cookies
    setcookie('carrito', json_encode($carrito), time() + (3 * 24 * 3600), "/");
    setcookie('acumulado', $acumulado, time() + (3 * 24 * 3600), "/");

    header('Location: ../vista/productos.php');
}
?>
