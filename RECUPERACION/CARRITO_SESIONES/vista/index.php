<?php
// INICIAR SESIÓN
session_start();
require_once'../modelo/Producto.php';
require_once'../controlador/controlador.php';
// 0 => NOMBRE // 1 => PRECIO // 2 => CANTIDAD
$productos = [
    new Producto("Jabon", 3.85),
    new Producto("Maíz", 4.50),
    new Producto("Gofio", 0.90),
    new Producto("Pan de leña", 1.60),
    new Producto("Merluza", 4.69),
    new Producto("Lonchas de pavo", 2.60),
    new Producto("ColaCao", 2.20),
    new Producto("Leche", 1.20)
];

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = [];
}



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
            <h3><?= htmlspecialchars($producto->getNombre()) ?></h3>
            <h4>Precio: <?= number_format($producto->getPrecio(), 2) ?> €</h4>
            <form action="../scripts/anadir_producto.php" method="post">
                <input type="hidden" name="agregar">
                <input type="hidden" name="nombre" value="<?= $producto->getNombre() ?>">
                <input type="hidden" name="precio" value="<?= number_format($producto->getPrecio(), 2) ?>">
                <input type="submit" value="Añadir">
            </form>
        </fieldset>
    <?php } ?>
</body>
</html>