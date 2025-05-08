<?php
// 225datosPersonales.html y 225datosPersonales.php: escribe un programa que pida nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono. Después los mostrará por pantalla dentro de una tabla.

$nombre = $_POST['nombre'] ?? '';
$apellido1 = $_POST['apellido1']?? '';
$apellido2 = $_POST['apellido2']?? '';
$email = $_POST['email']?? '';
$anioNacimiento = $_POST['anioNacimiento']?? '';
$telefono = $_POST['telefono']?? '';




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
    <style>
        td{
            padding:5px;
        }
    </style>
</head>
<body>
    <table border="solid" cellspacing="0" >
        <caption>TABLA 225 MOSTRAR DATOS</caption>
        <thead>
            <th>Nombre</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Email</th>
            <th>Año de Nacimiento</th>
            <th>Telefono</th>
            <tbody>
                <tr>
                    <td><?= $nombre ?></td>
                    <td><?= $apellido1?></td>
                    <td><?= $apellido2 ?></td>
                    <td><?= $email ?></td>
                    <td><?= $anioNacimiento ?></td>
                    <td><?= $telefono ?></td>
                </tr>
            </tbody>
        </thead>
    </table>
</body>
</html>