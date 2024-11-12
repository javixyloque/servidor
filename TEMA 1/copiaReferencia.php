<?php

/**
 * Aquí se agregan valores a una variable por copia, se copia el 
 * valor de la antigua a la nueva variable, que ocupa otro lugar en
 * memoria, al cambiar uno, el otro se mantiene igual
 */

$a = 100;
$b = $a;
$b = 200;


/**
 * Aquí se agregan valores a una variable por referencia, si cambiamos 
 * el valor de d, cambia el valor de c
 */

$c = 250;
$d = &$c;
$d = 60;

echo "$a, $b";
echo "$c, $d";
