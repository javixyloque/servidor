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

function digitoN(int $num, int $pos): int {
    $cadena = (string)$num;
    return (int)$cadena[$pos-1];
}


// quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.


function quitaPorDetras(int $num, int $cant) {
    $str = (string) $num;
    // SUBSTR => EMPIEZA EN 0, DEVUELVE TODO EL STR SIN $cant 
    return intval(substr($str, 0, strlen($str)-$cant));

}

// quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.

function quitaPorDelante(int $num, int $cant) {
    $str = (string)$num;
    return intval(substr($str,-(strlen($str)-$cant))); 

}


?>