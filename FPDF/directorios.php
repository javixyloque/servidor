<?php
// $directorio = C:/Users/javier.alvcen/Documentos/htdocs/servidor
    echo getcwd()."<br>";
    chdir("../PDO");
    echo getcwd()."<br>";
    chdir('c:/Users/javier.alvcen/Documentos/htdocs/');
    echo getcwd()."<br><br>";



 // ARRRAY DE ARCHIVOS Y DIRECTORIOS
    chdir('c:/Users/javier.alvcen/Documentos/htdocs/');
    $directorio = "servidor";
 // SE PUEDE HACER SORT-ASCENDING O DESCENDING
    $archivos = scandir($directorio, SCANDIR_SORT_DESCENDING);

    foreach ($archivos as $archivo) {
        echo $archivo."<br>";
    }

echo "<br><br>";

// CONTENIDO DEL DIRECTORIO, SIEMPRE ORDENADO ASCENDENTEMENTE

chdir('c:/Users/javier.alvcen/Documentos/htdocs/');
$carpeta = "servidor";
if ($gestor = opendir($carpeta)) {
    echo "<h3>Gestor del directorio: $gestor\n</h3><br>";
    echo "Entradas: \n<br>";
    // ITERAMOS EN EL DIRECTORIO
    while (false !== ($entrada = readdir($gestor))) {

        // COMPROBAMOS SI ES UN DIRECTORIO O UN ARCHIVO
        if ($entrada!= "." && $entrada!= "..") {
            echo "$entrada\n<br>";
        }
    }
    // CERRAMOS EL GESTOR
    closedir($gestor);
}

?>