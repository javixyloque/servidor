<?php
$ruta = "matriz.txt";

if (file_exists("matriz.txt")) {
    $archivo = fopen($ruta, "r");

    if ($archivo) {
        echo "Lectura fila por fila del archivo: <br>";
        while(!feof($archivo)) {

            // FSCANF PERMITE BUSCAR UN PATRÓN EN EL CONTENIDO DEL ARCHIVO
            // %D es para un decimal
            // %d es para un entero
            // %s es para una cadena de caracteres
            // %f es para un número con decimales

            // fscanf devuelve TRUE si se leyó una línea con éxito, FALSE si no lo ha podido leer
            // En caso de que no haya más líneas, la función devuelve FALSE
            // La función devuelve la cantidad de valores leídos, en este caso 3 (num1, num2, num3)
            fscanf($archivo, "%d %d %d", $num1, $num2, $num3);
            echo "<br>, $num1, $num2, $num3";


        }
        fclose($archivo);
    } else {
        echo "No se pudo abrir el archivo, novatín";
    }
} else {
    echo "El archivo no existe o no se ha encontrado";
}


?>