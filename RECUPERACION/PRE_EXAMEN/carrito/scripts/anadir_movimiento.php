<?php

require_once'../modelo/Movimiento.php';
if (!isset($_SESSION['movimientos'])) {
    session_start();
}

// Inicia la sesión de forma segura
session_start();

$negativo = boolval($_GET['negativo']);

if ($negativo) { // Elimina el else y usa un simple if
    $movimiento = new Movimiento(true);
} else {
    $movimiento = new Movimiento(false);
    
}
$_SESSION['movimientos'][] = $movimiento;
var_dump($_SESSION['movimientos']);
?>