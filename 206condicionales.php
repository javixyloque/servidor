<?php

    $manzanas = 16;

    // TIPOS DE CONDICIONALES
    
    // Condicion simple (no puedo poner tildes)
    // Solo evalua dos posibilidades, la de que se cumpla la condicion o la de que no se cumpla

    

    if (isset($manzanas)===true) {
        echo "CONDICIONAL SIMPLE: Pedro tiene $manzanas manzanas<br>";
    } 

    if (isset($manzanas)===false) {
        echo "CONDICIONAL SIMPLE: Las manzanas no estan definidas <br>";    
    }

    // CONDICION COMPUESTA
    // Tipica condicion se evalua con if-else

    if ($manzanas === 6) {
        echo "CONDICION COMPUESTA: Son las $manzanas <br>";
    } else {
        echo "CONDICION COMPUESTA: Pedro no tiene 6 manzanas, pero tiene $manzanas <br>";
    }

    // CONDICIONES MULTIPLES: SWITCH
    // Un caso para cada valor de la variable
    // Importante el break depues de ejecutar el codigo de cada caso
    // Default es como una condicion que surge si no se dan las demas, como un else

    switch ($manzanas) {
        case 0:
            echo "CONDICIONES MULTIPLES: No hay manzanas <br>";
            break;
        case 1:
            echo "CONDICIONES MULTIPLES: Hay una manzana <br>";
            break;
        default:
            echo "CONDICIONES MULTIPLES: Hay $manzanas manzanas <br>";
    }

    // OPERADOR TERNARIO
    // Evalua una condicion que va al principio, si se da, se ejecuta lo
    // inmediatamente posterior al signo de interrogacion, si no, el ultimo
    // que es el que va despues de los dos puntos

    $manzanas==10 ? print("OPERADOR TERNARIO: Hay 10 manzanas exactamente <br>") : print("OPERADOR TERNARIO: No hay 10 manzanas, hay $manzanas <br>");



?>
