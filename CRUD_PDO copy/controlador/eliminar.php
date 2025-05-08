<?php
require_once '../conexion/conexion.php';
require_once '../biblioteca.php';

// Obtener la conexión
$conexion = conexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

$idPrenda = isset($_GET['id']) ? (int)filtrado($_GET['id']) : '';

$consulta = "DELETE FROM rebajas_javier WHERE id_prenda = :id_prenda";
$delete = $conexion->prepare($consulta);
$delete->bindParam(":id_prenda", $idPrenda, PDO::PARAM_INT);

if ($delete->execute()) {
    header("Location: ../vista/index.php");
    exit();
} else {
    echo "Error al eliminar el producto: ";
}

// Cerrar la conexión
$conexion = null;
?>