<?php
// Escribe un programa que obtenga los habitantes de un país y si no le decimos nada, que nos diga todas las densidades que sabe. Llama a una función pasándole el país o nada 


function obtenerHabitantes(string $pais = "") {
    $paises = [
        "España" => 46.75,
        "Francia" => 66.99,
        "Alemania" => 82.79,
        "Italia" => 60.52,
        "Reino Unido" => 66.67,
        "China" => 1389.32,
        "India" => 1367.04,
        "Japon" => 126.47,
        "Rusia" => 143.40,
        "Brasil" => 212.55,
    ];
    
    // PASAR LA PRIMERA LETRA A MAYÚSCULA

    $paisUc = ucwords($pais);


    // CONDICIONAL => ¿PAÍS BUSCADO ESTÁ EN EL ARRAY?
    if (array_key_exists($paisUc, $paises)) {

        // SÍ => MOSTRAR DENSIDAD
        echo $paisUc." tiene ".$paises[$paisUc]." millones de habitantes<br><br>";

    } else {

        // NO => DENSIDAD DESCONOCIDA
        echo "La densidad de población de $paisUc es desconocida<br>Densidades de población conocidas:<br><br>";
        
        
        // BUCLE => MOSTRAR CIUDADES CON DENSIDAD CONOCIDA 
        foreach ($paises as $pais => $habitantes) {
            
            echo "Los habitantes de $pais son: $habitantes millones<br>";
        }
        echo "<br><br>";
    }

}

obtenerHabitantes("china");
obtenerHabitantes("Japon");
obtenerHabitantes("Kuwait")


?>