<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Álvarez Centeno">
    <title>224 - Funcion potencia</title>
</head>
<body>
    <?php
        function potencia ($base, $exponente = 2) {
            echo "$base elevado a $exponente = ".$base**$exponente."<br>";
        }
        potencia(2);
        potencia(2, 15);
        potencia(5);
        

    ?>
</body>
</html>