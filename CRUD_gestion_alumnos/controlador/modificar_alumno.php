<?php
include '../config/conexion.php';

// Obtener la conexión
$conexion = obtenerConexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

// Recibir los datos del formulario
$idAlumno = isset($_POST['id_alumno'])? (int)filtrado($_POST['id_alumno']) : 0;
$dni = isset($_POST['dni']) ? filtrado($_POST['dni']) : '';
$nombre = isset($_POST['nombre'])? filtrado($_POST['nombre']) : '';
$apellido1 = isset($_POST['apellido1'])? filtrado($_POST['apellido1']) : '';
$apellido2 = isset($_POST['apellido2'])? filtrado($_POST['apellido2']) : '';
$email = isset($_POST['email'])? filtrado($_POST['email']) : '';
$telefono = isset($_POST['telefono'])? filtrado($_POST['telefono']) : '';
$curso = isset($_POST['curso'])? (int)filtrado($_POST['curso']) : '';


if ($curso < 1 || $curso > 6) {
    echo "<script>
        alert('El curso debe de estar entre 1º y 6º, no se ha podido modificar el alumno');
        window.location.href = '../vista/listado_alumnos.php';
    </script>";
    
    exit();
    
    
}

$consulta = "UPDATE alumnos SET dni = ?, nombre = ?, apellido1 = ?, apellido2 = ?, email = ?, telefono = ?, curso = ? WHERE id_alumno = ?";
$update = $conexion->prepare($consulta);
$update->bind_param("ssssssii", $dni, $nombre, $apellido1, $apellido2, $email, $telefono, $curso, $idAlumno);

if ($update->execute()) {
    // Redirigir a la lista de alumnos después de modificar
    header("Location: ../vista/listado_alumnos.php");
    exit();
} else {
    echo "Error al actualizar el alumno: " . $conexion->error;
}

// Cerrar la conexión
$update->close();
$conexion->close();
?>