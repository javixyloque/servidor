<?php
require_once '../Modelo/Producto.php';
require_once '../Controlador/controlador.php';

$id = $_GET["index"];
$_SESSION['carrito'][$id][1]--;

header('Location: ../Vista/carrito.php');
exit;
?>    
    