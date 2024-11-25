<?php
    // CREAMOS, ESCRIBIMOS Y CERRAMOS UN FICHERO

    $archivo = "miarchivo.txt";
    $texto = "Hola, esto es un ejemplo de archivo de texto.\n";

    // SI QUEREMOS AÑADIR TEXTO, DEBE ABRIRSE A+
    $abrir = fopen($archivo, "w");

    fwrite($abrir, $texto);
    fclose($abrir);

?>