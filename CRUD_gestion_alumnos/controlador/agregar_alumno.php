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
$dni = isset($_POST['dni']) ? filtrado($_POST['dni']) : '';
$nombre = isset($_POST['nombre'])? filtrado($_POST['nombre']) : '';
$apellido1 = isset($_POST['apellido1'])? filtrado($_POST['apellido1']) : '';
$apellido2 = isset($_POST['apellido2'])? filtrado($_POST['apellido2']) : '';
$email = isset($_POST['email'])? filtrado($_POST['email']) : '';
$telefono = isset($_POST['telefono'])? filtrado($_POST['telefono']) : '';
$curso = isset($_POST['curso'])? (int)filtrado($_POST['curso']) : '';
if ($curso < 1 || $curso > 6) {
    echo "<script>
        alert('El curso debe de estar entre 1º y 6º, ahora te toca empezar de nuevo');
        window.location.href = '../vista/formulario_agregar.php';
    </script>";
    
    exit();
    
    
} else {
$consulta = "INSERT INTO alumnos (dni, nombre, apellido1, apellido2, email, telefono, curso) VALUES (?, ?, ?, ?, ?, ?, ?)";
$insert = $conexion->prepare($consulta);
$insert->bind_param("ssssssi", $dni, $nombre, $apellido1, $apellido2, $email, $telefono, $curso);

if ($insert->execute()) {
    // Redirigir a la lista de alumnos después de agregar
    header("Location: ./../vista/listado_alumnos.php");
    exit();
} else {
    echo "Error al agregar alumno: " . $conexion->error;
}

$insert->close();
$conexion->close();
}


?>