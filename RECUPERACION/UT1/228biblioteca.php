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



echo sumar(5,6)."<br>";
echo restar(5,6)."<br>";
echo multiplicar(5,6)."<br>";
echo dividir(192,2)."<br>";

?>