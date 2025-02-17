<?php
   session_start();
   $_SESSION['libros'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="UTF-8">
   <title>Carrito de libros</title>
</head>

<body>
   <h1>Carrito de Libros</h1>
   <?php

   //Muestra el carrito con los libros añadidos si no está vacío
   //Da posibilidad de:
   
   
   ?>
   <a href="detalle_pago_libro.php">Ir a detalles de pago</a>
   <a href="./vaciar_carrito.php">Vaciar el carrito</a>
   <a href="./libros.php">Seguir comprando</a>
</body>

</html>