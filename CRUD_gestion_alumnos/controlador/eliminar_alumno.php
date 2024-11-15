<?php
include '../config/conexion.php';

// Obtener la conexión
$conexion = obtenerConexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

// Obtener el ID del alumno desde la URL
$idAlumno = $_GET['id'];

// Preparar la consulta de eliminación
$consultaEliminar = "DELETE FROM alumnos WHERE id_alumno = ?";
$declaracionEliminar = $conexion->prepare($consultaEliminar);
$declaracionEliminar->bind_param("i", $idAlumno);

if ($declaracionEliminar->execute()) {
    // Redirigir al listado de alumnos después de eliminar
    header("Location: ../vista/listado_alumnos.php");
    exit();
} else {
    echo "Error al eliminar el alumno: " . $conexion->error;
}

// Cerrar la conexión
$declaracionEliminar->close();
$conexion->close();
?>