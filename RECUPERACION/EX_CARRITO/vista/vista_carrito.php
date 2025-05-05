<?php
session_start();
require_once'../modelo/Producto.php';

if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    echo "El carrito esta vacío<br><a href='./index.php'>SEGUIR COMPRANDO</a>";
} 

$carrito = $_SESSION['carrito'];


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
                <td><?= $producto['nombre'];?></td>
                <td><?= $producto['precio'] ?></td>
                <td> 
                    <form action="../scripts/eliminar1.php" method="post">
                        <input type="hidden" name="nombre" value="<?=$producto['nombre']?>">
                        <input type="hidden" name="precio" value="<?=$producto['precio']?>">
                        <input type="submit" value="-1">
                    </form>
                    <?=$producto['cantidad']?>
                    <form action="../scripts/anadir_producto.php" method="post">
                        <input type="hidden" name="nombre" value="<?=$producto['nombre']?>">
                        <input type="hidden" name="precio" value="<?=$producto['precio']?>">
                        <input type="submit" value="+1">
                    </form>
                </td>
                <td>
                    <?php $total = 0;
                        foreach ($carrito as $producto) {
                            $total += $producto['precio'] * $producto['cantidad'];
                        }
                        echo $total;
                    ?>
                </td>
            </tr>
        <?php }?>
    </table>
</body>
</html>