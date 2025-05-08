
<?php

function precioTotal($carrito) {
    $total = 0;
    foreach ($carrito as $nombre => $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}


function vaciarCarrito() {
    unset($_SESSION['carrito']);
}

function formatear($texto) {
    $texto = trim($texto); // eliminar espacios al inicio y final
    $texto = preg_replace('/\s+/', ' ', $texto); // reemplazar espacios múltiples por uno solo
    $texto = strtolower($texto); // pasar todo a minúsculas
    $texto = ucwords($texto); // poner primera letra de cada palabra en mayúscula
    return $texto;
}