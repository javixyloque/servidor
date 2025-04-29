<?php
// INICIAR SESIÓN
session_start();

// Inicializar el carrito si no existe o si no es un array
if (!isset($_SESSION['carrito']) || !is_array($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}

require_once'../modelo/Producto.php';
require_once'../controlador/controlador.php';
// 0 => NOMBRE // 1 => PRECIO // 2 => CANTIDAD
$carrito = [];
$productos = [
    
    ['nombre' => 'Jabon', 'precio' => 3.85, 'cantidad' => 1],
    ['nombre' => 'Maíz', 'precio' => 4.50, 'cantidad' => 1],
    ['nombre' => 'Gofio', 'precio' => 0.90, 'cantidad' => 1],
    ['nombre' => 'Pan de leña', 'precio' => 1.60, 'cantidad' => 1],
    ['nombre' => 'Merluza', 'precio' => 4.69, 'cantidad' => 1],
    ['nombre' => 'Lonchas de pavo', 'precio' => 2.60, 'cantidad' => 1],
    ['nombre' => 'ColaCao', 'precio' => 2.20, 'cantidad' => 1],
    ['nombre' => 'Leche', 'precio' => 1.20, 'cantidad' => 1]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    
</head>
<body>
    <a href="carrito.php" >Ver carrito</a>
    
    <?php foreach ($productos as $producto) { ?>
        <fieldset>
            <h3><?= htmlspecialchars($producto['nombre']) ?></h3>
            <h4>Precio: <?= number_format($producto['precio'], 2) ?> €</h4>
            <form action="../scripts/anadir_producto.php" method="post">
                <input type="hidden" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>">
                <input type="hidden" name="precio" value="<?= $producto['precio'] ?>">
                <input type="submit" value="Añadir al carrito">
            </form>
        </fieldset>
    <?php } ?>
</body>
</html>