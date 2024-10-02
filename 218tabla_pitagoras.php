<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla Pitagoras</title>
</head>
<body>
<table border="solid 2px" min-width="30%">
    <?php    
        $num = 10;
        $num++;
        echo "<thead><th colspan=".$num.">Tabla de Pitagoras</th></thead>";

            
            if ($num <= 1) { 
                echo "<tr><td>Escribe un numero mas grande que 0</td></tr>";
            }

            
            for ($i = 1; $i <= $num; $i++) {
                echo "<tr>";
                
                for ($j = 1; $j <= $num; $j++) {
                    if ($i === 1 && $j === 1) {
                        echo "<td>x</td>";
                        
                        
                    } else if ($i === 1) {       
                        echo "<td>".($i)*($j-1)."</td>";
                    }else if ($j ===1) {
                        echo "<td>".($i-1)*($j)."</td>";
                    }else {
                        echo "<td>".($i-1)*($j-1)."</td>";
                    }
                    
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>