<?php
    $coches = 0;
    $amigos = 5;

    // CONDICIONAL SIMPLE

    if ($coches < $amigos) {
        echo "Tienes menos coches que amigos<br>";
    } 

    
    
    // CONDICIONAL ANIDADO
    
    if ($coches < $amigos) {
        echo "Tienes menos coches que amigos<br>";
    } else if ($coches == $amigos) {
        echo "Tienes el mismo número de coches que amigos<br>";
    } else if ($coches > $amigos) {
        echo "Tienes más coches que amigos<br>";
    }
    

    // OPERADOR TERNARIO
    
    echo ($coches < $amigos) ? "Tienes menos coches que amigos<br>" : "Tienes más coches que amigos<br>";



    // SWITCH

    switch ($coches) {
        case 0:
            echo "No tienes coches<br>";
            break;
        case 1:
            echo "Tienes 1 coche<br>";
            break;
        default:
            echo "Tienes $coches coches<br>";
            break;
    }



?>
