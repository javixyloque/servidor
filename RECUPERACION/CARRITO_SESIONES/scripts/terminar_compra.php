<?php
session_start();
require_once '../controlador/controlador.php';
if (!isset($_SESSION['carrito']) || empty($_SESSION['carrito'])) {
    header("Location: ../vista/carrito.php");
    exit();
}
$precioTotal = precioTotal($_SESSION['carrito']);
unset($_SESSION['carrito']);

echo "<script>alert('Gracias por su compra, su total es: " . $precioTotal . " €');
window.location.href = '../vista';
</script>";


exit();



