<?php
require_once'../modelo/Producto.php';
$productos = [
    new Producto("Camisa blanca", 15.99),
    new Producto("Pantalones negros", 29.99),
    new Producto("Zapatillas de deporte", 59.99),
    new Producto("Corbata roja", 9.99),
    new Producto("Camiseta negra", 12.99)
];


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compras</title>
</head>
<body>
    <?php foreach ($productos as $producto) { ?>
        <form action="../scripts/anadir_producto.php" method="POST">
            <label for="nombre"><?= $producto->getNombre() ?></label>
            <input type="hidden" name="nombre" value="<?= strval($producto->getNombre()) ?>">

            <label for="precio"><?= $producto->getPrecio() ?> €</label> 
            <input type="hidden" name="precio" value="<?= floatval($producto->getPrecio()) ?>"> 
            
            <input type="submit" value="Añadir a la cesta">
        </form>
    <?php } ?>

    <a href="./vista_carrito.php">VER CARRITO</a>

</body>
</html>
