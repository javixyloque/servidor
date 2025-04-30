<?php

function precioTotal($carrito) {
    $total = 0;
    foreach ($carrito as $producto) {
        $total += $producto['precio'] * $producto['cantidad'];
    }
    return $total;
}


function vaciarCarrito() {
    unset($_SESSION['carrito']);
}


?>