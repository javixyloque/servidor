<?php
session_start();

require_once '../Modelo/Producto.php';

$productos = [
    [new Producto("Champú", 10),0],
    [new Producto("Jabón", 5),0],
    [new Producto("Pasta de dientes", 3),0],
];

if(!isset($_SESSION['carrito'])){
    $_SESSION['carrito']=$productos;
}

if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['agregar'])){
    $indice = $_POST['indice'];
    

    $_SESSION['carrito'][$indice][1]++;;
    header('Location: ../Vista/productos.php');
    exit;
}