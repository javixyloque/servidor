<?php
session_start();
require_once'../controlador/controlador.php';


//  CHECK   =>  INICIO SESIÓN
if (!isset($_SESSION['user'])) {
    header('Location:../vista');
} 

$id = filtrado($_GET['id'])?? 0;
try {
    eliminarTransaccion($id);
    header('location:../vista/transacciones.php');
} catch (PDOException) {
    echo "<script>alert('No se pudo eliminar la transacción')
        window.location.href='../vista/transacciones.php';</script>";
}





?>
