<?php
function conectar() {
    $conexion = mysqli_connect("localhost", "root", "", "302_modeloer");
    if ($conexion -> connect_errno) {
        echo "Error al conectar con la base de datos". $conexion -> connect_errno;
        exit();
    }
    return $conexion;
}
    // CONEXION A UNA BASE DE DATOS
    
    // echo "<h1>Bienvenido a la base de datos</h1>";


?>