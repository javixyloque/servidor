<?php
require_once '../modelo/Cuenta.php';

function sumar10($cuenta) {
    $saldo = $cuenta->getSaldo();
    $movs = $cuenta->getMovimientos();
    $cuenta->setSaldo($saldo+10);
    $movs[] = [
        'tipo' => "suma",
        'cantidad' => 10 
    ];
    if ($cuenta->getSaldo()>=0) {
        $cuenta->setNegativo(false);
    }
    $cuenta->setMovimientos($movs);
    return $cuenta;
}

function restar10($cuenta) {
    $saldo = $cuenta->getSaldo();
    $movs = $cuenta->getMovimientos();
    $cuenta->setSaldo($saldo-10);
    $movs[] = [
        'tipo' => "resta",
        'cantidad' => 10 
    ];
    if ($cuenta->getSaldo()<0) {
        $cuenta->setNegativo(true);
    }
    $cuenta->setMovimientos($movs);
    return $cuenta;
}

function filtrado ($data) {
    $data = trim($data);
    $data = strip_tags($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
