<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>225 - Datos Personales</title>
</head>
<body>
    <table border="solid 2px" cellspacing="0" height="300px" width="1000px">
        <thead bgcolor="605678">
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Correo electronico</th>
            <th>Año de nacimiento</th>
            <th>Telefono</th>
        </thead>
        <tbody align="center" bgcolor="8ABFA3">
            <!--- AQUI NO ABRO NI LA SESION DIRECTAMENTE PORQUE NO ME HACE FALTA TRABAJAR CON DATOS ANTERIORES -->
            <?php
                $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
                $prApe = isset($_GET['prApe']) ? $_GET['prApe'] : '';
                $sgApe = isset($_GET['sgApe']) ? $_GET['sgApe'] : '';
                $email = isset($_GET['email']) ? $_GET['email'] : '';
                $anioNac = isset($_GET['anioNac']) ? $_GET['anioNac'] : '';
                $telefono = isset($_GET['telefono']) ? $_GET['telefono'] : '';
            echo '<tr>';
                echo  "<td>$nombre</td><td>$prApe "."$sgApe</td><td>$email</td><td>$anioNac</td><td>$telefono</td>";

            echo '</tr>';
            ?>
        </tbody>
    </table>
</body>
</html>