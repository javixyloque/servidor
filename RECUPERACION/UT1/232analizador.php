
<?php
// A partir de una frase con palabras sólo separadas por espacios, devolver

// Letras totales y cantidad de palabras
// Una línea por cada palabra indicando su tamaño
// Nota: no se puede usar str_word_count

$frase = "aaaaa eee ii o u ";


$arrayPalabras = explode(" ",trim($frase));
$numPalabras = count($arrayPalabras);

$letrasTotales = 0;

foreach($arrayPalabras as $palabra) {
    echo "La palabra $palabra tiene ".strlen($palabra)." letras<br>";

    for($i = 0; $i<strlen($palabra); $i++) {
        $letrasTotales++;
    }
}

echo "La frase tiene $numPalabras palabras y un total de $letrasTotales letras<br>";


?>