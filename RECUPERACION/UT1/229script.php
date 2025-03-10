<?php
require_once'./229matematicas.php';
// SCRIPT DE PRUEBA MATEMATICAS.PHP

echo "<strong>Funciones de operaciones básicas</strong><br><br>";

echo "Suma: la suma de 5 y 6 es : ".sumar(5,6)."<br><br>";
echo "Resta: la resta de 5 y 6 es : ".restar(5,6)."<br><br>";
echo "Multiplicación: el producto de 5 y 6 es : ".multiplicar(5,6)."<br><br>";
echo "División: 192 entre 2 es : ".dividir(192,2)."<br><br>";


echo "<br><br><br>";

echo "<strong>Funciones de operaciones adicionales</strong><br><br>";

echo "<strong>Digitos</strong>: devuelve la <strong>cantidad de digitos</strong> de un numero<br>";
echo "La longitud de 123456 es: ".digitos(123456)."<br><br>";

echo "<strong>DigitoN</strong>: devuelve el digito en la posición que se especifique de un numero dado<br>";
echo "El digito en la posición 10 del número 1234567890 es: ".digitoN(1234567890, 10)."<br><br>";

echo "<strong>QuitaPorDetrás</strong>: devuelve el numero dado sin los números especificados por detrás<br>";
echo "Si le quitamos 5 numeros por detrás a 1234567890 nos queda el numero: ".quitaPorDetras(1234567890, 5)."<br><br>";

echo "<strong>QuitaPorDelante</strong>: devuelve el numero dado sin los números especificados por detrás<br>";
echo "Si le quitamos 5 numeros por delante a 1234567890 nos queda el número: ".quitaPorDelante(1234567890, 5);

?>