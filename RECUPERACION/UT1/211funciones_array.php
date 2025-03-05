<?php
// =============================
// OPERACIONES Y FUNCIONES CON ARRAYS EN PHP
// =============================

    // 1. Comparación de arrays
    $arr1 = array(1 => "3000", 2 => "4000");
    $arr2 = array(1 => 3000, 2 => 4000);
    $arr3 = array(2 => "4000", 1 => "3000");

    echo "<br><br>=== Comparación de Arrays ===<br><br>";
    if ($arr1 == $arr2) {
        echo "arr1 y arr2 son iguales<br><br>";
    } else {
        echo "arr1 y arr2 no son iguales<br><br>";
    }
    
    if ($arr1 === $arr2) {
        echo "arr1 y arr2 son idénticos<br><br>";
    } else {
        echo "arr1 y arr2 no son idénticos<br><br>";
    }

    // 2. Unión de arrays con +
    $arrA = array(10 => "3000", 20 => "4000", 30 => "6000");
    $arrB = array(10 => "8000", 15 => "6000", 20 => "4000");
    $union = $arrA + $arrB;

    echo "<br><br>=== Unión de Arrays ===<br><br>";
    print_r($union);

    // 3. Manipulación de arrays
    $frutas = ["naranja", "pera", "manzana"];
    array_push($frutas, "piña");
    echo "<br><br>=== Array con piña añadida ===<br><br>";
    print_r($frutas);

    $ultima = array_pop($frutas);
    echo "<br><br>Última fruta eliminada: $ultima<br><br>";
    print_r($frutas);

    echo (in_array("piña", $frutas)) ? "<br><br>Queda piña<br><br>" : "<br><br>No queda piña<br><br>";


    // 4. OBTENER CLAVES DE UN ASOCIATIVO

    $capitales = ["Italia" => "Roma", "Francia" => "Paris", "Portugal" => "Lisboa"];
    $claves = array_keys($capitales);
    echo "<br><br>=== Claves del array ===<br><br>";
    print_r($claves);

    // 5. Ordenación de arrays
    sort($claves);
    echo "<br><br>=== Claves ordenadas ===<br><br>";
    print_r($claves);

    // 6. Eliminar un elemento del array
    unset($capitales["Francia"]);
    echo "<br><br>=== Array sin Francia ===<br><br>";
    print_r($capitales);

    // 7. Extraer un fragmento de array
    $numeros = [10, 20, 30, 40, 50, 60];
    $subArray = array_slice($numeros, 2, 3);
    echo "<br><br>=== Subarray extraído ===<br><br>";
    print_r($subArray);

    // 8. Fusionar arrays
    $arr1 = ["a", "b", "c"];
    $arr2 = ["d", "e", "f"];
    $merge = array_merge($arr1, $arr2);
    echo "<br><br>=== Arrays fusionados ===<br><br>";
    print_r($merge);

    // 9. Contar elementos de un array
    echo "<br><br>Tamaño de \$merge: " . count($merge) . "<br><br>";

    // 10. Verificar existencia de índice en array
    $existe = isset($capitales["Italia"]) ? "Sí" : "No";
    echo "<br><br>¿Existe Italia en el array? $existe<br><br>";

?>
