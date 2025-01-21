<?php
    require_once'./controlador.php';
    require_once'../modelo/Producto.php';

    // COMPROBAR LA REQUEST
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // ASIGNACIÓN DE VARIABLES
        $carrito = isset($_COOKIE['carrito'])? json_decode($_COOKIE['carrito'], true) : [];
        $acumulado = isset($_COOKIE['acumulado'])? floatval($_COOKIE['acumulado']) : 0;
        $indice = isset($_GET['indice'])? intval(filtrado($_GET['indice'])) : null;

        foreach($carrito as $index => $carrito) {
            if ($index == $indice) {
                unset($carrito[intval($indice)]);
                print_r($carrito);
            }
        }

    }

?>