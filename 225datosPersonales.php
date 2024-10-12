<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>225 - Datos Personales</title>
</head>
<body>
    <table>
        <thead>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo electronico</th>
            <th>Año de nacimiento</th>
            <th>Telefono</th>
        </thead>
        <tbody>
            <?php
            session_start();
                $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
                $nombre = isset($_GET['prApe']) ? $_GET['prApe'] : '';
                $nombre = isset($_GET['sgApe']) ? $_GET['sgApe'] : '';
                $nombre = isset($_GET['email']) ? $_GET['email'] : '';
                $nombre = isset($_GET['anioNac']) ? $_GET['anioNac'] : '';
                $nombre = isset($_GET['telefono']) ? $_GET['telefono'] : '';
            echo '<tr>';
                

            echo '</tr>';
            ?>
        </tbody>
    </table>
</body>
</html>