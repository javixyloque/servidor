<?php
session_start();
require_once '../controlador/controlador.php';
if (!isset($_SESSION['cuenta'])) {
    header('Location: ../vista');
    exit;
}

$cuenta = unserialize($_SESSION['cuenta']);
$cuenta->setMovimientos([]);
$_SESSION['cuenta'] = serialize($cuenta);
header('Location: ../vista');
exit;

