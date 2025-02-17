<?php
require_once '../Modelo/Producto.php';
require_once '../Controlador/controlador.php';

    if(isset($_SESSION['carrito'])){
        unset($_SESSION['carrito']);
    }
    header('Location: ../Vista/productos.php');
    exit;
?>    
    