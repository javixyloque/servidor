<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer ejemplo</title>
</head>
<body>
    <!-- 3 formas distintas de hacer un print de algo en php -->

    <?php
    // Estos son los comentarios de php //
    // y esta es la primera y clasica forma de imprimir algo

    $hola = "Hola buenas";
        echo "Echo de toda la vida. $hola<br>";
    ?>
    

    <?php
    // Esta es la segunda, que usa print
        print("Esta es la del print<br>");
    ?>
    
    
    <?=
    // Esta es la tercera y ultima, suele utilizarse para imprimir variables
    // Las variables se declaran sin tipos y en minúscula siempre
        $hola;
    ?>

</body>
</html>