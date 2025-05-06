<?php
session_start();
require_once'../controlador/controlador.php';
if (!isset($_SESSION['carrito'])) {
    header('Location: ../vista');
    exit;
}

$carrito = $_SESSION['carrito'];
$precioTodo = precioTotal($carrito);


vaciarCarrito();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGO</title>
</head>
<body>
    <h1>Pago realizado con éxito</h1>
    <h2>Coste total: <em><?= $precioTodo ?> &euro;</em></h2>
    <a href="../vista">Seguir comprando</a>
</body>
</html>