<?php
session_start();
require_once'../modelo/Cuenta.php';

if (!isset($_SESSION['cuenta'])) {
    header('Location:../vista');
    exit;
}

$cuenta = unserialize($_SESSION['cuenta']);
$cuenta->setMovimientos([]);
$cuenta->setSaldo(0);
$cuenta->setNegativo(false);
$_SESSION['cuenta'] = serialize($cuenta);
header('Location:../vista');
exit;