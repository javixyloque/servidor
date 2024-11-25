<?php
include '../config/conexion.php';

// Obtener la conexión
$conexion = obtenerConexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

$idAlumno = isset($_GET['id']) ? (int)filtrado($_GET['id']) : '';

$consulta = "DELETE FROM alumnos WHERE id_alumno = ?";
$delete = $conexion->prepare($consulta);
$delete->bind_param("i", $idAlumno);

if ($delete->execute()) {
    header("Location: ../vista/listado_alumnos.php");
    exit();
} else {
    echo "Error al eliminar el alumno: " . $conexion->error;
}

// Cerrar la conexión
$delete->close();
$conexion->close();
?>