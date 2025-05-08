<?php
session_start();

if (isset($_SESSION['carrito']) && !empty($_SESSION['carrito'])) {
    unset($_SESSION['carrito']);
}

header("Location: ../vista");
exit();
?>