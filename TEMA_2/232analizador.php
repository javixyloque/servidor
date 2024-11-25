<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>232 - Analizador</title>
</head>
<body>
    <?php
    /*a partir de una input con palabras sólo separadas por espacios, devolver
    Letras totales y cantidad de palabras
    Una línea por cada palabra indicando su tamaño
    */
    $input = "Pepito esta muerto vivo";
    $arrFrase = explode(" ", strtolower($input));
    $tamTotal = 0;
    echo "Frase: $input<br>";
    foreach ($arrFrase as $paraula) {
        echo "Tamaño de la palabra <strong>$paraula</strong>: ".strlen($paraula)." letras<br>";
        $tamTotal+=strlen($paraula);
    }
    
    echo "Cantidad total de letras:  $tamTotal <br>";
    echo "Cantidad total de palabras: ".count($arrFrase);
    ?>
</body>
</html>