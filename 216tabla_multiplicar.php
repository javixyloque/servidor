<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>216 - Tabla de multiplicar</title>
</head>
<body>
    <table width="60%" border="solid 1px">
        <thead>
            <th colspan="2">
                
                <?php
                    $num = $_GET['num'];
                    if (isset($num)) {
                        echo "Esta es la tabla del $num";
                    } else {
                        echo "<h1>Escribe un parametro num en la url (.php?num=15 [por ejemplo])</h1>";
                        
                    }
                    
                ?>
                
            </th>
        </thead>
        <tbody>
            <?php    
                for ($i = 0 ; $i<=10; $i++) {
                    echo "<tr><td>$num x $i</td> <td>".$num*$i."</td></tr>";
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>