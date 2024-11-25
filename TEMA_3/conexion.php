<?php
function conectar() {
    $conexion = mysqli_connect("localhost", "root", "", "pruebas");
    if ($conexion -> connect_errno) {
        echo "Error al conectar con la base de datos". $conexion -> connect_errno;
        exit();
    }
    return $conexion;
}
    // CONEXION A UNA BASE DE DATOS
    
    // echo "<h1>Bienvenido a la base de datos</h1>";
    function filtrado ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>