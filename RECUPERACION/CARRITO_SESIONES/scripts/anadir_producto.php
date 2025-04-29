<?php
session_start();



// Verificar si se recibieron los datos POST
if (!isset($_POST['nombre']) || !isset($_POST['precio'])) {
    die('Error: Faltan datos del producto');
}

// Inicializar el carrito si no existe o si no es un array
if (!isset($_SESSION['carrito']) || !is_array($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

$carrito = $_SESSION['carrito'];
$nombre = $_POST['nombre'];
$precio = floatval($_POST['precio']);
$vista_carrito = $_POST['vista_carrito'] ?? false;

// Verificar que los datos son válidos
if (empty($nombre) || $precio <= 0) {
    die('Error: Datos del producto inválidos');
}

// BUSCAR REPETIDO
$productoEncontrado = false;
foreach ($carrito as $key => $producto) {
    if ($producto['nombre'] === $nombre) {
        $carrito[$key]['cantidad'] += 1;
        $productoEncontrado = true;
        break;
    }
}

// AÑADIR NUEVO
if (!$productoEncontrado) {
    $nuevoProducto = [
        'nombre' => $nombre,
        'precio' => $precio,
        'cantidad' => 1
    ];
    $carrito[] = $nuevoProducto;
}

// GUARDAR CARRITO ACTUALIZADO
$_SESSION['carrito'] = $carrito;

// REDIRIGIR A LA PAGINA DE LA TIENDA
if ($vista_carrito) {
    header("Location: ../vista/carrito.php");
} else {
    header("Location: ../vista/index.php");
}
exit();
?>