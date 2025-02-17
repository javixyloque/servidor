<?php
require_once '../Modelo/Producto.php';
require_once '../Controlador/controlador.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <?php

    if($_SESSION['carrito'][0][1]==0 && $_SESSION['carrito'][1][1]==0 && $_SESSION['carrito'][2][1]==0){
        echo "<p>El carrito está vacío</p>";
    }else{
        echo "<h1>Carrito de Productos:</h1>";
        echo "<ul>";
        $cont=0;
        foreach ($_SESSION['carrito'] as $producto){
            if($producto[1]>0){
                echo "<li>".$producto[1]." - ".$producto[0]->getNombre()." - ".$producto[0]->getPrecio()."&euro; - ";
                echo '<a href="eliminar1.php?index='.$cont.'">Eliminar 1</a> - ';
                echo '<a href="eliminarAll.php?index='.$cont.'">Eliminar todos</a></li>';
            }
            $cont++;
        }
        echo "</ul>";
        echo '<p><a href="realizar_pago.php">Comprar</a></p>';
        echo '<p><a href="vaciar.php">Vaciar carrito</a></p>';
    }   
    ?>    
    <p><a href="productos.php">Volver a la lista de productos</a></p>

</body>
</html>