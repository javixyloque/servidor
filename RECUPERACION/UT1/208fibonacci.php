<?php
// Escribe un programa que calcule el fibonacci de un número (208factorial.php).

// NUMERO DE ITERACIONES DEL BUCLE
$numero = 18;

// BUCLE CALCULAR FIBONACCI

$fib1 = 0;
$fib2 = 1;

$prod;


for ($i = 2; $i < $numero; $i++) {
    $prod = $fib1 + $fib2;
    $fib1 = $fib2;
    $fib2 = $prod; 
    echo $prod."<br>";

}

// echo $prod

?>