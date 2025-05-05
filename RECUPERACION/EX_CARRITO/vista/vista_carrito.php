<?php
session_start();
require_once'../modelo/Producto.php';
require_once'../controlador/controlador.php';

if (!isset($_SESSION['carrito'])) {
    echo "El carrito esta vacío<br><a href='./index.php'>SEGUIR COMPRANDO</a>";
} 

$carrito = json_decode($_SESSION['carrito']);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <table>
        <thead>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
        </thead>
        <?php foreach($carrito as $producto) {?>
            <tr>
                <td><?= $producto ->getNombre();?></td>
                <td><?= $producto ->getPrecio();?></td>
                <td><?= $producto ->getCantidad();?></td>
                <td></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>