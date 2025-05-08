<?php

// Formatea las salidas de distintas formas usando date(). Dada la fecha del sistema nos muestre el día de la semana (lunes, martes,...), del mes (enero, febrero,...),.. (https://entreunosyceros.net/php-funcion-date-php/amp/)

$fechaActual = date("Y-m-d H:i:s");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Formatos de Fecha</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Prueba de Formatos de Fecha y Hora</h2>
    <p style="text-align:center;">Fecha y hora actual: <strong><?php echo $fechaActual; ?></strong></p>
    <table>
        <tr>
            <th>Formato</th>
            <th>Descripción</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td>a</td>
            <td>am o pm</td>
            <td><?php echo date("a"); ?></td>
        </tr>
        <tr>
            <td>A</td>
            <td>AM o PM</td>
            <td><?php echo date("A"); ?></td>
        </tr>
        <tr>
            <td>h</td>
            <td>Hora en formato (01-12)</td>
            <td><?php echo date("h"); ?></td>
        </tr>
        <tr>
            <td>H</td>
            <td>Hora en formato 24 (00-23)</td>
            <td><?php echo date("H"); ?></td>
        </tr>
        <tr>
            <td>g</td>
            <td>Hora de 1 a 12 sin cero delante</td>
            <td><?php echo date("g"); ?></td>
        </tr>
        <tr>
            <td>G</td>
            <td>Hora de 1 a 23 sin cero delante</td>
            <td><?php echo date("G"); ?></td>
        </tr>
        <tr>
            <td>i</td>
            <td>Minutos (00-59)</td>
            <td><?php echo date("i"); ?></td>
        </tr>
        <tr>
            <td>s</td>
            <td>Segundos (00-59)</td>
            <td><?php echo date("s"); ?></td>
        </tr>
        <tr>
            <td>d</td>
            <td>Día del mes (01-31)</td>
            <td><?php echo date("d"); ?></td>
        </tr>
        <tr>
            <td>j</td>
            <td>Día del mes sin cero (1-31)</td>
            <td><?php echo date("j"); ?></td>
        </tr>
        <tr>
            <td>w</td>
            <td>Día de la semana (0=Domingo, 6=Sábado)</td>
            <td><?php echo date("w"); ?></td>
        </tr>
        <tr>
            <td>m</td>
            <td>Mes actual (01-12)</td>
            <td><?php echo date("m"); ?></td>
        </tr>
        <tr>
            <td>n</td>
            <td>Mes actual sin cero (1-12)</td>
            <td><?php echo date("n"); ?></td>
        </tr>
        <tr>
            <td>Y</td>
            <td>Año con 4 dígitos</td>
            <td><?php echo date("Y"); ?></td>
        </tr>
        <tr>
            <td>y</td>
            <td>Año con 2 dígitos</td>
            <td><?php echo date("y"); ?></td>
        </tr>
        <tr>
            <td>z</td>
            <td>Día del año (0-365)</td>
            <td><?php echo date("z"); ?></td>
        </tr>
        <tr>
            <td>t</td>
            <td>Número de días en el mes actual</td>
            <td><?php echo date("t"); ?></td>
        </tr>
    </table>
</body>
</html>
