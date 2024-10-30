<?php
    $empleados = ["Andrea", "Jose", "Jacinto", "Raul", "Angeles"];

    // FUNCIONES ARRAYS
    // Mostrar informacion con foreach y print_r

    print_r($empleados);        // Muestra indices y el elemento del array
    echo "<br>";
    foreach ($empleados as $persona) {
        print("$persona <br>");         // Muestra lo que queremos que muestre con cada iteracion
    
    }



    // var_dump = print_r pero sacando tipos de todo (en arrays por lo menos)

    var_dump($empleados);

    echo"<br>";
    


    // in_array devuelve un booleano. Si un elemento esta dentro del array
    
    if (in_array("Jose", $empleados)) {
        echo "Jose se encuentra en la lista";
    }

    echo "<br>Ahora usamos algunas funciones para modificar el array <br><br>";





    // FUNCIONES QUE MODIFICAN EL ARRAY
    // Todas estas pueden almacenar elementos del array en variables

    $desp1 = array_pop($empleados);     // array_pop elimina el elemento en el ultimo indice del array (Angeles)
    print_r($empleados);
    echo "<br>";


    $desp2 = array_shift($empleados);   // array_shift elimina el primer elemento del array (Andrea)
    print_r($empleados);
    echo "<br>";
    
    array_push($empleados, $desp1); // array_push añade un elemento al final del array ($desp1 === Angeles)
                                                    // En el push no tiene sentido almacenarlo como una variable, ya esta en el array
    print_r($empleados);
    echo "<br><br><br>";



    echo "Ahora probamos con Arrays asociativos <br><br>";
    

    $productos = [
        "Television" => 150,
        "Movil" => 200,
        "Aspiradora" => 60,
        "Rolex" => 2500
    ];

    // MAS FUNCIONES PARA ARRAYS
    
    $keys = array_keys($productos);     // Almacena las keys del array asociativo
    print_r($keys); echo "<br>";

    $size = count($productos);  // Devuelve el tamaño del array (asociativo o no)
    echo "El tamaño de este array es de $size elementos<br>";
    
    sort($keys);        // Almacena el array ordenado de menor a mayor (para arrays normales)
    print_r($keys); echo "  Ordenado de menor a mayor (alfabeticamente) <br>"; 
    
    asort($productos);       // Almacena el array ordenado de mayor a menor (para asociativos con los values, da igual la key)
    print_r($productos); echo "  Ordenado de menor a mayor (alfabeticamente)<br><br>";

    
    if (isset($keys["2"])) { // Booleano que comprueba por key la existencia del elemento
        unset($keys["2"]);   // Indice para arrays y key para asociativos
    } 
    print_r($keys);
    echo "<br><br>";


    // FUNCIONES QUE CREAN NUEVOS ARRAYS

    $venta = array_slice($productos, 1, 3); // Crea un array extrayendolo de otro, en offset (indice) empieza y dura la length
    print_r($venta);

    echo "<br>";


    $ventb = array_merge($keys, $venta, $empleados); // Junta arrays (asociativos con normales y viceversa)
    print_r($ventb);

?>
