<?php
// INICIAR SESIÓN
session_start();

// 0 => NOMBRE // 1 => PRECIO // 2 => CANTIDAD
$productos = [
    ["Jabon", 3.85, 1],
    ["Maíz", 4.50, 1],
    ["Gofio", 0.90, 1],
    ["Pan de leña", 1.60, 1],
    ["Merluza", 4.69, 1],
    ["Lonchas de pavo", 2.60, 1],
    ["ColaCao", 2.20, 1],
    ["Leche", 1.20, 1]
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
            <h3><?= htmlspecialchars($producto[0]) ?></h3>
            <h4>Precio: <?= number_format($producto[1], 2) ?> €</h4>
            <form action="../scripts/anadir_producto.php" method="post">
                <input type="hidden" name="nombre" value="<?= htmlspecialchars($producto[0]) ?>">
                <input type="hidden" name="precio" value="<?= $producto[1] ?>">
                <input type="submit" value="Añadir">
            </form>
        </fieldset>
    <?php } ?>
</body>
</html>