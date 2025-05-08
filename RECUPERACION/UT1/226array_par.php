<?php
declare (strict_types = 1);
// crea las siguientes funciones:

// Una función que averigüe si un número es par: esPar(int $num): bool


function esPar(int $num): bool {
    switch ($num) {
        
        // SI EL RESTO DE DIVIDIR ENTRE 2 ES 1 ES IMPAR
        case $num % 2 == 0:
            return true;
            break;
            
        // SI EL RESTO ES 0, ES PAR
        default:
            return false;
            break;
    }
            
}
        
// Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array

function arrayAleatorio(int $tam, int $min, int $max): array {
    $array = array($tam);
    for ($i = 0; $i < $tam; $i++) {
        $array[$i] = random_int($min, $max);
    }

    return $array;
}


// Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados y los sustituya por 0: arrayPares(array &$array): int

function arrayPares(array &$array): int {
    $contador = 0;
    foreach ($array as  &$num) {
        if (esPar($num)) {
            $num = 0;
            $contador++;
        }
    }
    return $contador;
}


echo "Es par 15? ";
var_dump (esPar(15));
echo"<br><br>Es par 20? ";
var_dump (esPar(20));
echo "<br><br><br>";

$array = arrayAleatorio(10, 1, 100);

print_r($array);

echo "<br>". arrayPares($array)." numeros pares hay en el array<br><br>";
print_r($array);



?>