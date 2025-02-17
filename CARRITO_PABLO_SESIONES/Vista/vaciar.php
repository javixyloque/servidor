<?php
require_once '../Modelo/Producto.php';
require_once '../Controlador/controlador.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar el pago</title>
</head>
<body>
    <?php
    if(isset($_SESSION['carrito'])){
        unset($_SESSION['carrito']);
        echo "<p> El carrito ha sido vaciado.</p>";
    }else{
        echo "<p>No hay productos en el carrito para realizar el pago.</p>";
    }
    ?>    
    <p><a href="productos.php">Volver a la lista de productos</a></p>

</body>
</html>