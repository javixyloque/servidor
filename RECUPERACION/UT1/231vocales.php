<?php

// A partir de una frase, devuelve la cantidad de cada una de las vocales, y el total de ellas.

$frase = "aa ee i o uuuu";

$vocales = ['a', 'e', 'i', 'o', 'u'];

$totalVocales = 0;

foreach ($vocales as $vocal) {
    $vocalAct = substr_count($frase, $vocal);
    $totalVocales += $vocalAct;
    echo "La vocal $vocal aparece $vocalAct veces<br>";
}

echo "<br><br>Hay un total de $totalVocales vocales";


?>