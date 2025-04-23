<?php
// MAGIC CONSTANT __DIR__
$archivo = __DIR__ . "/ejemplo.txt";

// CREAR Y ESCRIBIR ARCHIVO
echo "<h3>1. Creando y escribiendo en el archivo</h3>";
$contenido = "Hola, este es un archivo de prueba.\nSegunda línea de prueba.";
// file_put_contents => ESCRIBIR ARCHIVO
file_put_contents($archivo, $contenido); 
echo "Archivo creado correctamente en la ruta: " . $archivo . "<br>";


// LEER ARCHIVO
echo "<h3>2. Lectura completa con file_get_contents</h3>";
if (file_exists($archivo)) {
    // nl2br => INSERTA <BR> EN CADA SALTO DE LINEA DEL ARCHIVO
    echo nl2br(htmlspecialchars(file_get_contents($archivo)));
} else {
    echo "El archivo no existe.";
}

// 3. Uso de __DIR__ y __FILE__
echo "<h3>3. Uso de Magic Constants</h3>";
echo "Directorio actual (__DIR__): " . __DIR__ . "<br>";
echo "Ruta del archivo actual (__FILE__): " . __FILE__ . "<br>";

// 4. Escritura con fwrite con longitud
echo "<h3>4. Escritura con fwrite (longitud limitada)</h3>";
$nuevoArchivo = __DIR__ . "/fwrite_prueba.txt";
$fp = fopen($nuevoArchivo, "w");


if ($fp) {
    $texto = "Este es un texto largo que solo escribiremos parcialmente.\n";
    fwrite($fp, substr($texto, 0, 20)); // Solo escribe los primeros 20 caracteres
    fclose($fp);
    echo "Archivo creado con una longitud limitada de texto.<br>";
}

// 5. Obtener tamaño del archivo con filesize()
echo "<h3>5. Tamaño del archivo (filesize)</h3>";
if (file_exists($archivo)) {
    echo "El tamaño del archivo es: " . filesize($archivo) . " bytes.<br>";
} else {
    echo "No se pudo obtener el tamaño del archivo.";
}


?>
