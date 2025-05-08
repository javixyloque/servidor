<?php

session_start();
require_once'../modelo/Cuenta.php';

if (!isset($_SESSION['cuenta'])) {
    header('Location:../vista');
    exit;
}

$cuenta = unserialize($_SESSION['cuenta']);
$movimiento = htmlspecialchars($_GET['movimiento']) ?? '';

$movsCuenta = $cuenta->getMovimientos();

if ($movimiento == 'suma') {
    $movsCuenta[] = [
        'tipo' => 'suma',
        'cantidad' => 10
    ]; 
    $cuenta ->setMovimientos($movsCuenta);
    $cuenta->setSaldo($cuenta->getSaldo() + 10);
    if ($cuenta->getSaldo() >= 0) {
        $cuenta->setNegativo(false);
    }
    $_SESSION['cuenta'] = serialize($cuenta);

} else if ($movimiento == 'resta') {
    
    $movsCuenta[] = [
        'tipo' => 'resta',
        'cantidad' => 10
    ];
    $cuenta ->setMovimientos($movsCuenta);
    $cuenta->setSaldo($cuenta->getSaldo() - 10);
    if ($cuenta->getSaldo() < 0) {
        $cuenta->setNegativo(true);
    }
    $_SESSION['cuenta'] = serialize($cuenta);

} 
header('Location:../vista');

?>