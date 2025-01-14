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
    <ul>
    <?php
        foreach ($productos as $indice => $prod) {
            echo "<li>";
                echo "<h2>". $prod->getNombre(). "</h2>";
                echo "<p>Precio: ". $prod->getPrecio(). "</p>";
                echo "<form action='../controlador/anadir.php' method='post'>
                        <button type='submit' name='subir'>AÑADIR AL CARRITO</button>
                    </form>";
                
            echo "</li>";
        }

    
    ?>


    </ul>
</body>
</html>