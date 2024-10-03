<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>217 - Pinta tabla</title>
</head>
<body>
    <table border="solid 2px">
    <?php    
        $num = 17;

        echo "<thead><th colspan=".$num.">Lista de coordenadas</th></thead>";
        
            
            if ($num <= 0) { 
                echo "<tr><td>Escribe un numero mas grande que 0</td></tr>";
            }

            for ($i = 1; $i <= $num; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $num; $j++) {
                    echo "<td>($i, $j)</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>