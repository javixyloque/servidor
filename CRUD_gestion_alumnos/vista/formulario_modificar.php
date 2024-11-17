<?php
include '../config/conexion.php';
// include 'encabezado.php';

// Obtener la conexión
$conexion = obtenerConexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit;
}

// Obtener el ID del alumno desde la URL
$idAlumno = $_GET['id'];

// Consulta para obtener los datos del alumno específico
$consultaAlumno = "SELECT * FROM alumnos WHERE id_alumno = ?";
$declaracionAlumno = $conexion->prepare($consultaAlumno);
$declaracionAlumno->bind_param("i", $idAlumno);
$declaracionAlumno->execute();
$resultado = $declaracionAlumno->get_result();
$alumno = $resultado->fetch_assoc();

if (!$alumno) {
    echo "Alumno no encontrado";
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Modificar alumno</title>
</head>
<body>
    

<h2>Modificar Alumno</h2>

<form action="../controlador/modificar_alumno.php" method="POST">
    <!-- Campo oculto para enviar el ID del alumno -->
    <input type="hidden" name="idAlumno" value="<?php echo $idAlumno; ?>">

    <label for="dni">DNI</label><br>
    <input type="text" name="dni" id="dni" value="<?php echo $alumno['dni']; ?>" required><br>

    <label for="nombre">Nombre</label><br>
    <input type="text" name="nombre" id="nombre" value="<?php echo $alumno['nombre']; ?>" required><br><br>

    <label for="apellido1">Primer Apellido</label><br>
    <input type="text" name="apellido1" id="apellido1" value="<?php echo $alumno['apellido1']; ?>" required><br><br>

    <label for="apellido2">Segundo Apellido</label><br>
    <input type="text" name="apellido2" id="apellido2" value="<?php echo $alumno['apellido2']; ?>" required><br><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" value="<?php echo $alumno['email']; ?>" required><br><br>

    <label for="telefono">Teléfono</label><br>
    <input type="text" name="telefono" id="telefono" value="<?php echo $alumno['telefono']; ?>" required><br><br>

    <label for="curso">Curso</label><br>
    <input type="number" name="curso" id="curso" value="<?php echo $alumno['curso']; ?>" required><br><br>
    <input type="hidden" name="id_alumno" value="<?php echo $idAlumno; ?>">
    <button type="submit">Guardar Cambios</button>
</form>
</body>
</html>

<?php
// include 'pie.php';
// $conexion->close();
?> 