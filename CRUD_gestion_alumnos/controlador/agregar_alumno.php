<?php
include '../config/conexion.php';



// Obtener la conexión
$conexion = obtenerConexion();

// Verificar la conexión
if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

// Recibir los datos del formulario
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$curso = $_POST['curso'];

// Preparar la consulta de inserción
$consulta = "INSERT INTO alumnos (dni, nombre, apellido1, apellido2, email, telefono, curso) VALUES (?, ?, ?, ?, ?, ?, ?)";
$consultaInsert = $conexion->prepare($consulta);
$consultaInsert->bind_param("ssssssi", $dni, $nombre, $apellido1, $apellido2, $email, $telefono, $curso);

if ($consultaInsert->execute()) {
    // Redirigir a la lista de alumnos después de agregar
    header("Location: ../vista/listado_alumnos.php");
    exit();
} else {
    echo "Error al agregar alumno: " . $conexion->error;
}

// Cerrar la conexión
$consultaInsert->close();
$conexion->close();
?>