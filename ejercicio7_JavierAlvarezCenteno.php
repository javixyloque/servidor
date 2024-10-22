<?php
    $muebles = [
        "armario" => 90,
        "escritorio" => 40,
        "silla" => 10,
        "comoda" => 75
    ];
    
    $nombres = [];
    $pesos = [];
    
    
    foreach ($muebles as $mueble => $peso) {
        
        echo "Mueble: $mueble  -  Peso: $peso<br>";
        array_push($nombres, $mueble);
        array_push($pesos, $peso);
        
    }
    $mueblesOrd= asort($muebles);
    print_r($muebles);
    echo "<br>";
    
    $mueblesRev =  array_reverse($muebles, true);


    print_r($mueblesRev);
    
    
?>