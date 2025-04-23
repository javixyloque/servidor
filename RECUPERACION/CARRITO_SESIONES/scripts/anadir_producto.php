<?php
// Añadir esto al inicio
require_once'../modelo/Producto.php';
require_once'../controlador/controlador.php';


$carrito = json_decode($_SESSION['carrito']) ?? [];
if (!is_array($carrito)) {
    $carrito = json_decode($_SESSION['carrito']);
}
$nombre = $_POST['nombre'] ?? '';
$precio = $_POST['precio'] ?? '';
$encontrado = false;

// BUSCAMOS PRODUCTO EN EL CARRITO

for ($i= 0; $i < count($carrito); $i++) {
    // SI ENCUENTRA => SUMAMOS 1 DE CANTIDAD AL PRODUCTO Y SALIMOS
    if ($carrito[$i]->getNombre() === $nombre) {
        $encontrado = true;
        $cantidad = $carrito[$i]->getCantidad();
        // CREO UNA NUEVA INSTANCIA DEL PRODUCTO EN LUGAR DE MODIFICAR LA REFERENCIA
        $productoNuevo = new Producto($producto->getNombre(), $producto->getPrecio());
        $cantidad++;
        $productoNuevo->setCantidad($cantidad);
        $carrito[$i]->setCantidad($cantidad);
        break;
    }

}







// unset($producto); 

// SI NO ENCONTRADO => AÑADIMOS NUEVO PRODUCTO
if (!$encontrado) {
    $nuevoProducto = new Producto($nombre, $precio); 
    array_push($carrito, $nuevoProducto);
}


// GUARDAR => JSON_PRETTY_PRINT FORMATEA JSON
$_SESSION['carrito'] = json_encode($carrito);
print_r($_SESSION['carrito']);

header("Location: ../vista/index.php");
exit();







?>