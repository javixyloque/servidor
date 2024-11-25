<?php
// Supongamos "index.php" en la carpeta "proyecto".
// Usamos __DIR__ para incluir "config.php" que está en la misma carpeta.
require_once __DIR__ . '/config.php';
// Podemos usar __DIR__ para incluir un archivo en una subcarpeta.
require_once __DIR__ . '/biblioteca/funciones.php';
// Imprimimos el directorio actual
echo "Directorio actual: " . __DIR__;


?>