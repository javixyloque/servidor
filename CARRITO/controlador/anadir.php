<?php
    require_once'./controlador.php';
    session_start();

    // COMPROBAR LA REQUEST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $carrito = isset($_COOKIE['carrito']) ? json_decode($_COOKIE['carrito'], true) : [];
        $acumulado = isset($_COOKIE['acumulado']) ? intval($_COOKIE['acumulado']) : 0;
        $nombreProd = filtrado($_POST['nombreProd'])?? '';
        echo $nombreProd;
    } 

    

    //BUCLE PARA BUSCAR EL PRODUCTO EN EL ARRAY
    foreach ($productos as $indice => $producto) {
        // SI EL NOMBRE DEL PRODUCTO ES CO
        if ($producto->getNombre() == $nombreProd) {
            array_push($carrito, $producto ->getNombre());
        }
    // json_decode json_encode para serializar los productos
    } 

    print_r($carrito);



?>