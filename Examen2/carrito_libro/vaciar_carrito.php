<?php

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Vaciar carrito</title>
</head>

<body>
    <h1>Vaciar carrito</h1>
    <?php
    //Vacía el carrito mostrando un mensaje
    $_SESSION['libros'] = [];

    //Da la posiblidad de volver al listado de libros a comprar
    
    ?>
    <a href="./libros.php">Seguir comprando</a>
</body>

</html>