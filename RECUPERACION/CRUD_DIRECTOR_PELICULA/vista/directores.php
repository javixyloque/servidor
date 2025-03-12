<?php
    require_once'../controlador/controlador.php';
    $conexion = conectar();

    $sql = "SELECT d.* FROM director d";
    $consulta = $conexion->prepare($sql);
    $select = $consulta->execute();
    $directores = $consulta->fetchAll(PDO::FETCH_ASSOC);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LISTADO DE DIRECTORES</h1>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido / s</th>
            <th>Fecha de nacimiento</th>
            <th>Foto</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </tr>
        
    </table>
</body>
</html>