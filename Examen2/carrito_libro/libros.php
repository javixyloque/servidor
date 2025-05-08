<?php
    require_once './controlador_libro.php';
    require_once'./Libro.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Libros</title>
</head>
<body>
    <h1>Libros disponibles para comprar</h1>
    <!--Listado de los libros disponibles para añdir al carrito -->
        <ul>
            <?php
                foreach ($librosComprar as $libro) {
                    echo "<li>";
                    echo $libro->getTitulo();
                    echo $libro->getPrecio();
                    echo $libro->getCantidad();
                    // echo "<button action='./controlador_libro.php?id=".anadirLibro($libro).">Añadir al carrito</button>";
                    echo "</li>";
                }

            ?>
        </ul>
    <!--Posibilidad de ver el carrito -->
    <a href='./carrito_libro.php'>Ver carrito</a>";
</body>
</html>
