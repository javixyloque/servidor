<?php
session_start();
require_once '../modelo/Producto.php';
require_once '../controlador/controlador.php';

$carrito = $_SESSION['carrito'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    
</head>
<body>
    <h1>Carrito de Compras</h1>
    <?php if (empty($carrito)): ?>
        <p>El carrito está vacío</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($carrito as $producto): ?>
                    <tr>
                        <td><?= htmlspecialchars($producto['nombre']) ?></td>
                        <td><?= number_format($producto['precio'], 2) ?> €</td>
                        <td style="display: flex; justify-content: space-evenly">
                            <form action="../scripts/eliminar_producto.php" method="POST">
                                <input type="hidden" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>">
                                <input type="hidden" name="precio" value="<?= $producto['precio'] ?>">
                                <input type="submit" value="-1">
                            </form>
                            <!-- NBSP => ESPACIO EN BLANCO-->
                            &nbsp;<?= $producto['cantidad'] ?>&nbsp;
                            <form action="../scripts/anadir_producto.php" method="POST">
                                <input type="hidden" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>">
                                <input type="hidden" name="precio" value="<?= $producto['precio'] ?>">
                                <input type="hidden" name="vista_carrito" value="true">
                                <input type="submit" value="+1">
                            </form>
                        </td>

                        <td><?= number_format($producto['precio'] * $producto['cantidad'], 2) ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h2>Precio total: <?= number_format(precioTotal($carrito), 2) ?> €</h2>
    <?php endif; ?>
    <a href="index.php">Volver a la tienda</a>
    <a href="../scripts/vaciar_carrito.php">Vaciar carrito</a>
    <a href="../scripts/terminar_compra.php">Terminar compra</a>
</body>
</html>