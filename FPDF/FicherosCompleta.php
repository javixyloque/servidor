<?php
    // ESTO GUARDA EL CONTENIDO DE UN ARCHIVO DEL 
    $contenido = file_get_contents("fichero_ejemplo.txt");
    echo "Contenido del fichero: <h1>$contenido</h1><br>";

    // ESTO CREA UN FICHERO NUEVO
    $res=file_put_contents("fichero_salida.txt", "Fichero creado con file put_contents");
    if ($res) {
        echo "Fichero creado con éxito";
    } else {
        echo "Error al crear el fichero";
    }
?>