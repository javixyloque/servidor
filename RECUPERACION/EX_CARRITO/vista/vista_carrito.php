<?php
session_start();
require_once'../modelo/Producto.php';
require_once'../controlador/controlador.php';

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
            <th>Eliminar producto</th>
        </thead>
        <?php foreach($carrito as $nombre => $producto) {?>
            <tr>
                <td><?= $nombre;?></td>
                <td><?= $producto['precio'] ?> &euro;</td>
                <td style="display:flex; align-items: center; Justify-content: space-between"> 
                    <form action="../scripts/eliminar1.php" method="post">
                        <input type="hidden" name="nombre" value="<?=$nombre?>">
                        <input type="hidden" name="precio" value="<?=$producto['precio']?>">
                        <input type="hidden" name="verprods" value="true">
                        <input type="submit" value="-1">
                    </form>
                    &nbsp;<?=$producto['cantidad']?> &nbsp;
                    <form action="../scripts/anadir_producto.php" method="post">
                        <input type="hidden" name="nombre" value="<?=$nombre?>">
                        <input type="hidden" name="precio" value="<?=$producto['precio']?>">
                        <input type="hidden" name="verprods" value="true">
                        <input type="submit" value="+1">
                    </form>
                </td>
                <td>
                    <?= $producto['precio'] * $producto['cantidad'] ?> &euro;
                </td>
                <td>
                    <a href="../scripts/eliminar_cantidad_producto.php?nombre=<?=$nombre?>">
                        Eliminar
                    </a>
                </td>
            </tr>
        <?php }?>
    </table>
    <?php $total = 0;
        foreach ($carrito as $producto) {
            $total += $producto['precio'] * $producto['cantidad'];
        }
        echo "Precio total: ". $total." &euro;";
    ?>
    
    <a href="../scripts/vaciar_carrito.php">VACIAR CARRITO</a>
    <a href="./pago.php">PAGAR</a>
</body>
</html>