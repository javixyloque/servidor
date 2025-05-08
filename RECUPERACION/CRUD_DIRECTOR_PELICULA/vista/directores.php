<?php
    require_once'../controlador/controlador.php';
    
    $directores = leerDirectores();
    
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
        <tbody>
            <?php
                foreach ($directores as $director) {
                        echo "<tr";
                        echo "<td>". $director['apellido']. "</td>";
                        echo "<td>". $director['fecha_nac']. "</td>";
                        echo "<td><img src='". $director['foto']. "' alt='Foto director' width='100'></td>";
                        echo "<td><a href='editar_director.php?id=". $director['id_director']. "'>Modificar</a></td>";
                        echo "<td><a href='eliminar_director.php?id=". $director['id_director']. "'>Eliminar</a></td>";
                        echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <a href="./formulario_director.html" method="post">AÑADIR UN DIRECTOR</form>

    <a href="./index.php">VOLVER AL INICIO</a>
</body>
</html>