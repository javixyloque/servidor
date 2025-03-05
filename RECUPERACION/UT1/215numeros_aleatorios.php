<?php
// Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:

// El mayor
// El menor
// La media

    $array = [];

    // BUCLE => RELLENAR ARRAY ALEATORIOS ( 0 - 100 )
    for ($i = 0; $i<33; $i++) {
        array_push($array, random_int(0, 100));
    }

    // IMPRIMIR RESULTADOS
    echo "Mayor: ".max($array)."<br>";
    echo "Menor: ".min($array)."<br>";
    echo "Media: ".array_sum($array)/count($array)."<br>";



?>