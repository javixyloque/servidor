<?php
require_once '../modelo/Producto.php';

// LISTA DE PRODUCTOS
$productos = [
    new Producto("Pan de molde", 1.29),
    new Producto("Leche entera 1L", 0.99),
    new Producto("Huevos 12 unidades", 2.39),
    new Producto("Manzanas 1kg", 1.75),
    new Producto("Pasta espaguetis 500g", 0.95),
    new Producto("Tomate frito 400g", 1.45),
    new Producto("Aceite de oliva 1L", 4.99),
    new Producto("Café molido 250g", 3.49),
    new Producto("Cereal de desayuno 500g", 2.99),
    new Producto("Detergente para ropa 3L", 7.50)
];

// FUNCIÓN DE FILTRADO
function filtrado($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

function procesarPago(): bool {
    // CONDICION => ESTAN YA SETTED LAS COOKIES?
    
    if (isset($_COOKIE['carrito']) && isset($_COOKIE['acumulado'])) {
        // LIMPIAR LAS COOKIES
        setcookie('carrito', '', time() - 3600, '/'); // Expira la cookie del carrito
        setcookie('acumulado', '', time() - 3600, '/'); // Expira la cookie del acumulado
        
        
        return true;
    }
    
    return false;
}


// FUNCIÓN PARA MOSTRAR EL CARRITO
function pintarCarrito() {
    // VERIFICAR SI EXISTE CARRITO Y / O ESTÁ VACIO
    if (!isset($_COOKIE['carrito']) || empty($_COOKIE['carrito'])) {
        echo '<h1>El carrito de compras está vacío</h1>';
        return;
    }

    // OBTENER CARRITO
    $carrito = json_decode($_COOKIE['carrito'], true);
    
    $acumulado = 0;


    echo "<h1>Carrito de compras</h1>";
    echo "<table>";
    echo "<tr><th>Producto</th><th>Precio</th><th>Eliminar</th></tr>";

    // MOSTRAR LOS PRODUCTOS
    
    foreach ($carrito as $indice => $producto) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($producto['nombre']) . "</td>";
        echo "<td>" . floatval($producto['precio']) . " €</td>";
        echo "<td><a href='../controlador/eliminar.php?indice=$indice'>Eliminar</a></td>";
        echo "</tr>";
        $acumulado += $producto['precio'];
    }

    echo "</table>";
    echo "<h4>Total a pagar: " . floatval($acumulado) . " €</h4>";
    echo "<a href='../vista/productos.php'>Seguir comprando</a><br><br>";
    echo "<a href='./realizar_pago.php'>Pagar</a>";
}
?>
