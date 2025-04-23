<?php

// INICIALIZAR CARRITO
echo"hola mundo";

// AGREGAR PRODUCTO AL CARRITO
$_SESSION['carrito'] = json_encode(new Producto('Producto 1', 10));
// $_SESSION['carrito'][] = new Producto('Producto 2', 20);
// $_SESSION['carrito'][] = new Producto('Producto 3', 30);

// MOSTRAR CARRITO
var_dump($_SESSION['carrito']);

?>