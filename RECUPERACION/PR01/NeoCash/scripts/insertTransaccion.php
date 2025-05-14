<?php
session_start();
require_once'../controlador/controlador.php';

//  CHECK   =>  INICIO SESIÓN
if (!isset($_SESSION['user'])) {
    header('Location: ../vista');
} 

$concepto = filtrado($_POST['concepto']) ?? '';
$cantidad = floatval(filtrado($_POST['cantidad'])) ?? 0;
$tipo = filtrado($_POST['tipo']) ?? '';
$fecha = date($_POST['fecha']) ?? '';

$nombreCliente = strval($_SESSION['user']) ?? '';
$idCliente = selectIdCliente($nombreCliente);




try{
    insertarTransaccion($concepto, $cantidad, $tipo, $fecha, $idCliente);
    $archivo = __DIR__ . "/../transacciones.txt";
    $nuevaTransaccion = $concepto . " " . $cantidad . " " . $tipo . " " . $fecha . " " . $nombreCliente . "\n";
    if (file_exists($archivo)) {
        file_put_contents($archivo, $nuevaTransaccion, FILE_APPEND);
    } else {
        file_put_contents($archivo, $nuevaTransaccion);
    } 
    echo "<script>alert('Transacción realizada correctamente');
                window.location.href = '../vista/transacciones.php'
        </script>";
    
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage();
}






?>