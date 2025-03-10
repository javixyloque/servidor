<?php
declare (strict_types=1);

// Crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números.


function sumar (float $num1, float $num2): float {
    return $num1 + $num2;
}

function restar (float $num1, float $num2): float  {
    return $num1 - $num2;
}

function multiplicar(float $num1,float $num2): float  {
    return $num1*$num2;
}

function dividir(float $num1, float $num2): float  {
    return $num1/$num2;
}


// Añade las siguientes funciones:

// digitos(int $num): int → devuelve la cantidad de dígitos de un número.

function digitos(int $num): int  {
    return strlen((string)$num);
}

// digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.

function digitoN(int $num, int $pos) {
    $cadena = (string)$num;
    return (int)$cadena[$pos-1];
}


// quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.


function quitaPorDetras(int $num, int $cant) {

}
// quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.

function quitaPorDelante(int $num, int $cant) {
    $str = (string)$num;
    return substr($str,0,-$cant); 

}


echo quitaPorDelante(1234567, 3);

?>