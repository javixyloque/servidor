<?php
// JAVIER ALVAREZ CENTENO
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once '../controlador/controlador.php';

if (!isset($_SESSION['empresa'])) {
    header('Location: ../vista');
    exit;
}

$empresa = selectEmpresa($_SESSION['empresa']);

$titulo = filtrado($_POST['titulo']) ?? '';
$sueldo = intval(filtrado($_POST['sueldo'])) ?? 0;
$jornada = filtrado($_POST['jornada']) ?? '';
$ciudad = filtrado($_POST['ciudad']) ?? '';
$fecha = date($_POST['fecha']);
$empresa = filtrado($_POST['id_empresa']);



?>