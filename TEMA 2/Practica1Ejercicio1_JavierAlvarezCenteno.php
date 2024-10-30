<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>Ejercicio 1</title>
</head>
<body>
<?php

// $tam = (int)$_GET['num_numeros'];
// $bajo = (int)$_GET['num_min'];
// $alto = (int)$_GET['num_max'];


$tam = 10;
$bajo = 50;
$alto = 100;

$numeros = [];
$contados = [];

$contMayor = 0;
$contMenor = 0;
    if ($tam<0) {
        echo "No es un tamaño valido";
    } else if ($alto < $bajo||$alto === $bajo) {
        echo "El número mayor debe ser el mayor de los dos";
    }

    for ($i = 0 ; $i < $tam; $i++){
        array_push($numeros, rand($bajo, $alto));
    }
    print_r($numeros);
    

    foreach ($numeros as $num) {
        if ($num > ($alto+$bajo)/2) {
            $contMayor++;
        } else if ($num < ($alto+$bajo)/2) {
            $contMenor++;
        }
    }
    array_push($contados, $contMayor);
    array_push($contados, $contMenor);
    echo "Primero van los mayores de la media y despues los menores";
    print_r ($contados);

    echo "<br><br><br><br>";


$numeros2 = [];
$contados2 = [];
$mayor2 = 0;
$menor2 = 0;
    for ($i = 0 ; $i < $tam; $i++){
        array_push($numeros2, rand($bajo, $alto));
    }
    print_r($numeros2);
    foreach ($numeros2 as $num) {
        if ($num > ($alto+$bajo)/2) {
            $mayor2++;
        } else if ($num < ($alto+$bajo)/2) {
            $menor2++;
        }
    }
    array_push($contados2, $mayor2);
    array_push($contados2, $menor2);
    echo "Primero van los mayores de la media y despues los menores<br>";
    print_r($contados2);
    echo "<br><br>";

    if ($contados2[0]>$contados[0]) {
        echo "El segundo numeros tiene más numeros por encima de la media que el primero<br><br>";
        print_r($numeros2);
    } else {
        echo "Tienen los mismos mayores que menores, nos quedamos con el primero<br><br>";
        print_r($numeros);
    }
    




?>
</body>
</html>





