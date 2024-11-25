<?php
$ruta = "matriz.txt";

if (file_exists("matriz.txt")) {
    $archivo = fopen($ruta, "r");

    if ($archivo) {
        echo "Lectura fila por fila del archivo: <br>";
        while(!feof($archivo)) {

            // FSCANF PERMITE BUSCAR UN PATRÓN EN EL CONTENIDO DEL ARCHIVO
            fscanf($archivo, "%d %d %d", $num1, $num2, $num3);
            echo "<br>, $num1, $num2, $num3";


        }
        fclose($archivo);
    } else {
        echo "No se pudo abrir el archivo";
    }
} else {
    echo "El archivo no existe o no se ha encontrado";
}


?>