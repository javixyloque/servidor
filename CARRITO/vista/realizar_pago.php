<?php
    require_once'../controlador/controlador.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGO</title>
</head>
<body>
    <?php
        if (!isset($_COOKIE['carrito'])) {
            echo "<script>alert('El carrito está vacío, intenta realizar una compra primero')</script>";
        } else {
            if (procesarPago()) {
                echo "<h1>Pago realizado correctamente</h1><br><br><a href='./productos.php'>volver a comprar</a>";
            }
        }
        
    ?>
</body>
</html>