<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>215 - Numeros aleatorios</title>
</head>
<body>
    <?php
        $arr = [];
        while (count($arr)<33) {
            array_push($arr, rand(1,100));
        }
        
        foreach ($arr as $var) {
            echo "$var<br>";
        }

        
    ?>
    <h2>Media: 
        <?php
            echo array_sum($arr)/count($arr);
        ?>
    </h2>
    <h2>Mayor: 
        <?php
            echo max($arr);
        ?>
    </h2>
    <h2>Menor: 
        <?php
            echo min($arr);
        ?>
    </h2>
    
</body>
</html>