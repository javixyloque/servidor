<?php
    // Crear un array asociativo, donde guardes de 5 países (claves) sus capitales (valor).
    // Recorre el array mostrando por cada país toda la información ("La capital de España es Madrid"). 
    // En ese mismo recorrido crea dos arrays simples, uno que contenga las capitales y otro los países. 
    // Recórrelos, en este caso con un for.
    
    $paises = [
        "España" => "Madrid",
        "El Salvador" => "El Salvador",
        "Portugal" => "Lisboa",
        "Estonia" => "Tallín",
        "Letonia" => "Riga"
    ];

    foreach($paises as $pais => $capital) {
        echo "La capital de $pais es $capital <br>";
    }


    echo "<br> Ahora con dos arrays y un for <br><br>";

    $countries = ["España", "El Salvador", "Portugal", "Estonia", "Letonia"];
    $cities = ["Madrid", "El Salvador", "Portugal", "Tallín", "Riga"];
    
    for ($i = 0; $i < count($countries); $i++) {
        echo "La capital de $countries[$i] es $cities[$i] <br>";
    }
    
    echo "<br><br>";
    print_r($paises);
    echo "<br><br>";
    print_r($countries);
    echo "<br><br>";

?>
