<?php
    require_once'../modelo/Producto.php';
    require_once'../controlador/controlador.php';
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
</head>
<body>
    <ul style="list-style: none; display: grid; grid-template-columns: repeat(2, 1fr);">
        <?php 
            foreach ($productos as $indice => $prod) {    
                echo "<li style='margin-bottom: 8vh;'>";
                    echo "<h2>". filtrado($prod->getNombre()). "</h2>";
                    echo "<p>Precio: ". filtrado($prod->getPrecio()). "</p>";
                    echo "<form action='../controlador/anadir.php' method='post'>
                            <input type='hidden' name='nombreProd' value='" . filtrado($prod->getNombre()) . "'>
                            <button type='submit' name='subir' style='cursor: pointer;'>AÑADIR AL CARRITO</button>
                        </form>";
                echo "</li>";
            }
        ?> 
    </ul>
    <a href="../vista/carrito.php">VER CARRITO</a>
</body>
</html>