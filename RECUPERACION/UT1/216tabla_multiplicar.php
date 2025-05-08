<?php
    $numero = $_GET['num'] ?? 0;




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla del <?= $numero?></title>
</head>
<body style="display: flex; align-items:center; justify-content: center">
    
    <table border="solid" cellspacing="0" style="text-align: center;">
        <thead>
            <th>Operación</th>
            <th>Resultado</th>
        </thead>

        <tbody>
            <?php

                for ($i = 0; $i <= 10; $i++) {
                    echo "<tr>";
                    echo "<td>".$numero." x ".$i."</td>";
                    echo "<td>".$numero*$i."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>