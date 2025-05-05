<?php
session_start();
require_once'../modelo/Producto.php';

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = json_encode(array());
}
var_dump($_SESSION['carrito']);

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: ../vista');
}

$carrito = json_decode($_SESSION['carrito']);
$nombre = strval($_POST['nombre']) ?? '';
$precio = floatval($_POST['precio']) ?? 0;
var_dump($carrito);
echo"<br>".$nombre."<br>".$precio;
return;


$productoEncontrado = false;

foreach ($carrito as $producto) {
    if ($producto ->getNombre() == $nombre) {
        $productoEncontrado = true;
        break;
    }
}

if ($productoEncontrado) {
    foreach ( $carrito as &$producto) {
        if ($producto -> getNombre() == $nombre) {
            $producto -> setCantidad(($producto->getCantidad())+1);
            break;
        }
    }
} else {
    $carrito[] = new Producto($nombre, $precio);
    $_SESSION['carrito'] = json_encode($carrito);
}


header('Location: ../vista');