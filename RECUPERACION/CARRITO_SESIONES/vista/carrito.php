<?php
session_start();

$carrito = $_SESSION['carrito'] ?? []; // Usar operador null coalescing por si no existe
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
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
                        <td><?= htmlspecialchars($producto[0]) ?></td>
                        <td><?= number_format($producto[1], 2) ?> €</td>
                        <td><?= $producto[2] ?></td>
                        <td><?= number_format($producto[1] * $producto[2], 2) ?> €</td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <a href="index.php">Volver a la tienda</a>
</body>
</html>