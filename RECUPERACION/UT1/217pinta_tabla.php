
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA DE COORDENADAS</title>
</head>
<body>
    <table border="solid 1px" cellspacing="0" >        
        <?php
            $filas = 4;
            $columnas = 5;

            for ($i = 0; $i < $filas; $i++){
                echo "<tr>";

                for ($j = 0; $j < $columnas; $j++) {
                    echo "<td style='padding: 15px'>(".$i+1 .", ". $j+1  . ")</td>";
                }

                echo "</tr>";
            }



        ?>
    </table>
</body>
</html>