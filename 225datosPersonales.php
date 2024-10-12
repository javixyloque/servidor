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
                $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
                echo''.$nombre.'';




            echo '<tr>';
                

            echo '</tr>';
            ?>
        </tbody>
    </table>
</body>
</html>