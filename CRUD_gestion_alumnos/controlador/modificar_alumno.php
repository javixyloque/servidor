<?php
include '../config/conexion.php';

// Obtener la conexión
$conexion = obtenerConexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

// Recibir los datos del formulario
$idAlumno = $_POST['idAlumno'];
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$curso = $_POST['curso'];

// Preparar la consulta de actualización
$consultaActualizar = "UPDATE alumnos SET dni = ?, nombre = ?, apellido1 = ?, apellido2 = ?, email = ?, telefono = ?, curso = ? WHERE id_alumno = ?";
$declaracionActualizar = $conexion->prepare($consultaActualizar);
$declaracionActualizar->bind_param("ssssssii", $dni, $nombre, $apellido1, $apellido2, $email, $telefono, $curso, $idAlumno);

if ($declaracionActualizar->execute()) {
    // Redirigir a la lista de alumnos después de modificar
    header("Location: ../vista/listado_alumno.php");
    exit();
} else {
    echo "Error al actualizar el alumno: " . $conexion->error;
}

// Cerrar la conexión
$declaracionActualizar->close();
$conexion->close();
?>