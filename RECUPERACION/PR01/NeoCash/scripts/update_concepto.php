<?php
session_start();
require_once'../controlador/controlador.php';

// CHEQUEO => INICIO SESION
if (!isset($_SESSION['user'])) {
    header('Location:../vista');
}

// CHEQUEO => TIPO DE ACCION
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location:../vista/transacciones.php');
}

$concepto = filtrado($_POST['concepto'])?? '';
$id = filtrado($_POST['id'])?? 0;


try {
    updateConcepto($id, $concepto);
    header('Location:../vista/transacciones.php');
} catch (PDOException) {
    header('Location:../vista/transacciones.php');
}


?>