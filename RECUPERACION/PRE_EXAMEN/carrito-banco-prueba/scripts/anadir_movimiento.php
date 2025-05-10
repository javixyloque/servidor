<?php
session_start();
require_once '../controlador/controlador.php';
require_once '../modelo/Cuenta.php';
if (!isset($_SESSION['cuenta'])) {
    header('Location: ../vista');
    exit;
}


$tipoMov = filtrado($_GET['mov']) ?? '';
$cuenta  = unserialize($_SESSION['cuenta']);

if ($tipoMov=='suma') {

    $actualizada = sumar10($cuenta);
    $_SESSION['cuenta'] = serialize($actualizada);
} else if ($tipoMov == 'resta') {

    $actualizada = restar10($cuenta);
    $_SESSION['cuenta'] = serialize($actualizada);
}

header('Location: ../vista');


?>