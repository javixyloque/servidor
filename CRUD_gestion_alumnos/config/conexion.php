<?php
// conexion.php
function obtenerConexion() {
    $conexion = new mysqli("localhost", "root", "", "gestion_alumnos");

    // Verificar si hubo un error al conectar
    if ($conexion->connect_errno) {  
        echo "Error al conectar a la base de datos: " . $conexion->connect_error;
        exit;
    }

    return $conexion; // Retornamos la conexión exitosa

    /*Ejemplo de uso:

    include 'conexion.php';

    $conexion = obtenerConexion();

    if ($conexion) {
        echo "Conexión exitosa";
        // Aquí puedes seguir con las consultas o cualquier operación con la base de datos
    }else{
        echo "Conexión fallida";
    }

    // Cerrar la conexión cuando hayas terminado
    $conexion->close();
    */
}

?>