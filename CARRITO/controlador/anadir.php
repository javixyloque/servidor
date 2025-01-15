<?php
    require_once'./controlador.php';
    require_once'../modelo/Producto.php';

    
    
    // COMPROBAR LA REQUEST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // ASIGNACIÓN DE VARIABLES
        $carrito = isset($_COOKIE['carrito']) ? json_decode($_COOKIE['carrito'], true) : [];
        $acumulado = isset($_COOKIE['acumulado']) ? floatval($_COOKIE['acumulado']) : 0;
        $nombreProd = isset($_POST['nombreProd'])? filtrado($_POST['nombreProd']) : '';

        if (!isset($_COOKIE['carrito'])) {
            
        }

        // BUCLE PARA BUSCAR EL PRODUCTO EN EL ARRAY
        foreach ($productos as $indice => $producto) {
            // SI EL NOMBRE DEL PRODUCTO ES CO
            if ($producto->getNombre() == $nombreProd) {
                $carrito[] =$producto->getNombre();
                $acumulado+= $producto->getPrecio();
                
            }
            
        // json_decode json_encode para serializar los productos
        } 

        if (!isset($_COOKIE['acumulado'])) {
            
        } 
        $_COOKIE['acumulado'] = strval($acumulado);
        $_COOKIE['carrito'] = json_encode($carrito);
        
    } 

    

    // INICIALIZAMOS LAS COOKIES PARA 3 HORAS (NI LAS VIEJAS DE MI BARRIO TARDAN TANTO) DARLE UNA VUELTA A ESTO
    // setcookie('acumulado', $acumulado, time() + (3 * 3600));
    // setcookie('carrito', json_encode($carrito), time() + (3 * 3600));

    echo $_COOKIE['carrito'];
    echo $_COOKIE['acumulado'];

    // header('location: ../vista/carrito.php');


    function pintarCarrito() {

    }


?>
