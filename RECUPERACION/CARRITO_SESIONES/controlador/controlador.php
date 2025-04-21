<?php
session_start();
require_once'../modelo/Producto.php';

$productos = [
    new Producto("Jabon", 3.85),
    new Producto("Maíz", 4.50),
    new Producto("Gofio", 0.90),
    new Producto("Pan de leña", 1.60),
    new Producto("Merluza", 4.69),
    new Producto("Lonchas de pavo", 2.60),
    new Producto("ColaCao", 2.20),
    new Producto("Leche", 1.20)
];


?>