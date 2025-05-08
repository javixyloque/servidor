<?php
session_start();
require_once '../modelo/Cuenta.php';

$cuenta = new Cuenta('Javier');
$_SESSION['cuenta'] = $cuenta;

function calcularSaldo() {
    
}
?>