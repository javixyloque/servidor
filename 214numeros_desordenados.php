<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>214 - Numeros desordenados</title>
</head>
<body>
    <h1>Los numeros pares hasta el 50 en un array desordenado</h1>
    <ul>
    <?php
        // $max = $_GET['max'];
        $max = 50;
        $arr = [];
        
        
        $counter = 0;
        while ($counter < $max) {
            $num = rand(1, 50);
            $counter++;
            if ($num%2 === 0 && in_array($num, $arr)===false) {
                echo "<li>$num</li>";
                array_push($arr, $num);
            }   
        }
        print_r($arr);
    ?>
    </ul>
</body>
</html>