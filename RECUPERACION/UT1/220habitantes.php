<?php

// Mediante un array asociativo, almacena el nombre y los habitantes (en millones) de 5 paises (nombre => habitantes). Posteriormente, recorre el array y muéstralo en una tabla HTML. Finalmente añade una última fila a la tabla con la densidad media de población.


$paises = [
    "España" => 46.75,
    "Francia" => 66.99,
    "Alemania" => 82.79,
    "Italia" => 60.52,
    "Reino Unido" => 66.67
]



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>País</th>
            <th>Habitantes (millones)</th>
        </thead>

        <tbody>
            <?php
                foreach ($paises as $pais => $habs) {
                    echo "<tr style='padding: 15px'>
                            <td>$pais</td>
                            <td>$habs</td>
                          </tr>";
                }

            ?>
        </tbody>
    </table>
</body>
</html>