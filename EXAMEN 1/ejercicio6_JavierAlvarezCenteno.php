<?php

    function calculaSueldo ($edad, $sueldo) {
        $sueldoNuevo = 0;
        if ($edad < 16) {
            return "La edad del usuario debe ser mínimo de 16 años";
        }

        if ($sueldo>3000) {
            $sueldoNuevo = $sueldo;

        } else if ( $sueldo < 3000 && $sueldo >2000) {

            if ($edad>40) {
                $sueldoNuevo = ($sueldo*1.2);
            } else {
                $sueldoNuevo = ($sueldo*1.13);
            }
        } else if ($sueldo<2000) {
            if ($edad < 30) {
                $sueldoNuevo = 2030;
            } else if ($edad>=30 && $edad <=40) {
                $sueldoNuevo=  ($sueldo*1.04);
            } else {
                $sueldoNuevo = ($sueldo*1.15);
            }
        }
        
        return "Edad: $edad<br>Sueldo anterior: {$sueldo}€<br>Sueldo nuevo: {$sueldoNuevo}€<br>
        Fecha y hora del cambio: ";

    }
    

    echo calculaSueldo(31, 1745);
    // echo calculaSueldo(15, 1542);
    // echo calculaSueldo(27, 1900);
    // echo calculaSueldo(41, 3000);

?>