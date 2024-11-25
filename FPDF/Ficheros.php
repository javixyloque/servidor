<?php

$nombreArchivo = "C:\Users\javier.alvcen\Desktop\Javier Álvarez Centeno Creación dinamica de formularios.txt";
//
$archivo = fopen($nombreArchivo, "r"); // LA MAS RECOMENDABLE ES LA B

if ($archivo ) {
    echo "El archivo se abrió correctamente<br>";

    // FEOF DEVUELVE TRUE CUANDO SE LLEGA AL FINAL DEL FICHERO
    while(!feof($archivo)){
        // FGETC LEE EL FICHERO CARÁCTER A CARÁCTER
        $car = fgetc($archivo);
        echo $car;
    }

    fclose($archivo); //IMPORTANTE CERRAR EL ARCHIVO
    echo "<br>El archivo se ha cerrado correctamente";
} else {
    echo "No se pudo abrir el archivo $nombreArchivo<br>";
}


?>