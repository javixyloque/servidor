<?php

// ECHAR UN OJO

    $dinero = 50;

    $billetes = [
        "500" => 0,
        "200" => 0,
        "100" => 0,
        "50" => 0,
        "20" => 0,
        "10" => 0,
        "5" => 0,
    ];

    $monedas = [
        "2" => 0,
        "1" => 0
    ];

    $valBilletes = array_keys($billetes);
    $valMonedas = array_keys($monedas);

    if ($dinero < 1) {
        echo "Ahorra un poco q no tienes un duro";
    } else {

        // BUCLE QUITAR DINERO Y AÑADIR BILLETES
        while ($dinero>=0) {
            foreach ($valBilletes as $b) {
                if ($dinero >= $b) {
                    $billetes[$b]++;
                    $dinero -= $b;

                }
            }
        }
        //     // BUCLE QUITAR DINERO Y AÑADIR MONEDAS CUANDO YA NO PUEDE MAS BILLETES
        //     foreach ($valMonedas as $m) {
        //         if ($dinero >= $m) {
        //             $monedas[$m]++;
        //             $dinero -= $m;
        //         }
        //     }
        // }

    }


    var_dump($billetes);
    echo "<br><br>";
    var_dump($monedas);




?>