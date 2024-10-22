<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php


    function operandoValores () {
        $enteros = func_get_args();
        $suma = 0;
        $prod = 1;
        foreach ($enteros as $num) {
            $suma+=$num;
            $prod*=$num;
        }
        return "Suma total: $suma<br>Producto total: $prod";
    }
    echo operandoValores(1,2,3,4);

    ?>
</body>
</html>