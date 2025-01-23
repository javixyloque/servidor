<?php
require_once './controlador.php';

// COMPROBAR LA REQUEST
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $carrito = [];
    $acumulado = isset($_COOKIE['acumulado']) ? floatval($_COOKIE['acumulado']) : 0;
    $indice = isset($_GET['indice']) ? intval(filtrado($_GET['indice'])) : null;

    // Leer y decodificar la cookie 'carrito'
    if (isset($_COOKIE['carrito'])) {
        $carrito = json_decode($_COOKIE['carrito'], true);
        if (!is_array($carrito)) {
            $carrito = [];
        }
    }


    if ($indice !== null && isset($carrito[$indice])) {
        $acumulado -= $carrito[$indice]['precio'];
        // ELIMINAR
        unset($carrito[$indice]);
        
        // REINDEXAR ARRAY CARRITO
        $carrito = array_values($carrito); 

        // ACTUALIZAR COOKIES
        setcookie('carrito', json_encode($carrito), time() + (3 * 24 * 3600), '/');
        setcookie('acumulado', $acumulado, time() + (3 * 24 * 3600), '/');
    } else {
        echo "Error: Índice inválido o no existe en el carrito.<br>";
    }

    header('location: ../vista/carrito.php');
    
}
?>
