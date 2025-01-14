<?php
    require_once'./controlador.php';
    session_start();

    // COMPROBAR LA REQUEST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombreProd = filtrado($_POST['subir'])?? '';
        $nombreFinal = str_replace("%20", ' ', $nombreProd);
    } 
    echo $nombreProd;
    //BUCLE PARA BUSCAR EL PRODUCTO EN EL ARRAY
    foreach ($productos as $indice => $producto) {
        // SI EL NOMBRE DEL PRODUCTO ES CO
        if ($producto->getNombre() == $nombreProd) {
            array_push($_COOKIE['carrito'][], [$nombreProd, $producto->getPrecio()]);
        }
    // json_decode json_encode para serializar los productos
    } 
    print_r( $_COOKIE['carrito']);



?>