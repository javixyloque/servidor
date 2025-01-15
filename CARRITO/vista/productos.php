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
    <?php foreach ($productos as $indice => $prod) {

            
            echo "<li>";
                echo "<h2>". filtrado($prod->getNombre()). "</h2>";
                echo "<p>Precio: ". filtrado($prod->getPrecio()). "</p>";
                echo "<form action='../controlador/anadir.php' method='post'>
                        <input type='hidden' name='nombreProd' value='" . filtrado($prod->getNombre()) . "'>
                        <button type='submit' name='subir'>AÑADIR AL CARRITO</button>
                    </form>";
                
            echo "</li>";
        
    }?>
    </ul>
</body>
</html>