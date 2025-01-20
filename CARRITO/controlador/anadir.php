<?php
    require_once'./controlador.php';
    require_once'../modelo/Producto.php';

    
    
    // COMPROBAR LA REQUEST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // ASIGNACIÓN DE VARIABLES
        $carrito = isset($_COOKIE['carrito']) ? json_decode($_COOKIE['carrito'], true) : [];
        $acumulado = isset($_COOKIE['acumulado']) ? floatval($_COOKIE['acumulado']) : 0;
        $nombreProd = isset($_POST['nombreProd'])? filtrado($_POST['nombreProd']) : '';

        

        // BUCLE PARA BUSCAR EL PRODUCTO EN EL ARRAY
        foreach ($productos as $indice => $producto) {
            // SI EL NOMBRE DEL PRODUCTO ES CO
            if ($producto->getNombre() == $nombreProd) {
                
                $productoNuevo = $producto->getNombre();
                array_push($carrito, $productoNuevo);
                $acumulado+= $producto->getPrecio();
                
                
                
            }
            
        // json_decode json_encode para serializar los productos
            

        } 
        print_r ($carrito);
        echo $acumulado;
        setcookie('acumulado', $acumulado, time() + (3 * 24 * 3600));
        setcookie('carrito', json_encode($carrito), time() + (3 * 24 * 3600));
        
        header('location: ../vista/carrito.php');
        
        
    } 

    

   
    

    

    // header('location: ../vista/carrito.php');


    


?>
