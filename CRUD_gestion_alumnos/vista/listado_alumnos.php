<?php
include '../config/conexion.php';

// Obtener la conexión
$conexion = obtenerConexion();

if (!$conexion) {
    echo "Ha fallado la conexión con la base de datos";
    exit; // Detenemos el script en caso de fallo
}

// Consulta para obtener todos los registros de la tabla alumnos
$consultaListar = "SELECT * FROM alumnos";
$resultado = $conexion->query($consultaListar);

// Guardar los resultados en un array
$alumnos = [];
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $alumnos[] = $fila;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Listado de alumnos</title>
</head>
<body>
    


<h2>Lista de Alumnos</h2>
<!-- Botón para agregar un nuevo alumno -->
<a href="formulario_agregar_alumno.php">
    <button>Agregar Alumno</button>
</a>

<!-- Tabla para mostrar los alumnos -->
<table>
    <thead>
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Email</th>
            <th>Teléfono</th>
            <th>Curso</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($alumnos)) {
            foreach ($alumnos as $alumno) {
                echo "<tr>";
                echo "<td>" . $alumno['dni'] . "</td>";
                echo "<td>" . $alumno['nombre'] . "</td>";
                echo "<td>" . $alumno['apellido1'] . "</td>";
                echo "<td>" . $alumno['apellido2'] . "</td>";
                echo "<td>" . $alumno['email'] . "</td>";
                echo "<td>" . $alumno['telefono'] . "</td>";
                echo "<td>" . $alumno['curso'] . "</td>";
                // Botón para modificar
                echo "<td><a href='formulario_modificar_alumno.php?id=" . $alumno['id_alumno'] . "'><button type='button'>Modificar</button></a></td>";
                // Botón para eliminar
                echo "<td><a href='../controlador/eliminar_alumno.php?id=" . $alumno['id_alumno'] . "' onclick=\"return confirm('¿Estás seguro de que deseas eliminar este alumno?');\"><button type='button'>Eliminar</button></a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9'>No hay alumnos registrados.</td></tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
<?php
$conexion->close();
?>