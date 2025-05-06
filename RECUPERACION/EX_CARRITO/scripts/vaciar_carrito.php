<?php
session_start();
require_once'../controlador/controlador.php';

vaciarCarrito();
header('Location: ../vista/vista_carrito.php');
exit;
?>


