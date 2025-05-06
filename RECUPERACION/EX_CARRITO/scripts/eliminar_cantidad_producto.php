<?php
session_start();

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}
if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    header('Location: ../vista');
}

// FUNCION PARA FILTRAR STRINGS 
$nombre = filter_var($_GET['nombre'], FILTER_SANITIZE_STRING) ?? '';
$carrito = $_SESSION['carrito'];





foreach ($carrito as $nomProd => &$producto) {
    if ($nomProd === $nombre) {
        unset($carrito[$nombre]);
    }
}

$_SESSION['carrito'] = $carrito;

header('Location: ../vista/vista_carrito.php');