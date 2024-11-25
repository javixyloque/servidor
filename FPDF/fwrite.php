<?php
    // CREAMOS, ESCRIBIMOS Y CERRAMOS UN FICHERO
    $archivo = "miarchivo.txt";
    $texto = "FUNCIONA POR FAVOR";

    // SI QUEREMOS AÑADIR TEXTO, DEBE ABRIRSE A+
    $abrir = fopen($archivo, "w");

    fwrite($abrir, $texto);
    fclose($abrir);

?>