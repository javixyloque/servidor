<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Álvarez Centeno">
    <title>224 - Funcion potencia</title>
</head>
<body>
    <h1>
    <?php
        function potencia ($base, $exponente = 2) {
            return "$base elevado a $exponente = ".$base**$exponente."<br>";
        }
        echo potencia(2);
        echo potencia(2, 15);
        echo potencia(5);
        

    ?>
    </h1>
</body>
</html>