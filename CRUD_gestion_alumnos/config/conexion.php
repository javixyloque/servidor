<?php
// conexion.php
function obtenerConexion() {
    $conexion = new mysqli("localhost", "root", "", "gestion_alumnos");

    // Verificar si hubo un error al conectar
    if ($conexion->connect_errno) {  
        echo "Error al conectar a la base de datos: " . $conexion->connect_error;
        exit;
    }
    return $conexion;
}

function filtrado ($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>