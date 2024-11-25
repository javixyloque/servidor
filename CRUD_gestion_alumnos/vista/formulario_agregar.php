
<?php
include '../config/conexion.php';

// Obtener la conexión
$conexion = obtenerConexion();

// Verificar la conexión
if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit; // Detenemos el script en caso de fallo
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Agregar Alumno</title>
    
</head>
<body>
    <header><h2>Agregar Nuevo Alumno</h2></header>

    <main>
        <form action="../controlador/agregar_alumno.php" method="POST">
            <label for="dni">DNI</label><br>
            <input type="text" name="dni" id="dni" required><br><br>

            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" id="nombre" required><br><br>

            <label for="apellido1">Primer Apellido</label><br>
            <input type="text" name="apellido1" id="apellido1" required><br><br>

            <label for="apellido2">Segundo Apellido</label><br>
            <input type="text" name="apellido2" id="apellido2" required><br><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required><br><br>

            <label for="telefono">Teléfono</label><br>
            <input type="text" name="telefono" id="telefono" required><br><br>

            <label for="curso">Curso</label><br>
            <input type="number" name="curso" id="curso" required><br><br>

            <button type="submit">Guardar Alumno</button>
        </form>
    </main>

    <footer></footer>

    <?php
    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>