<?php

// 1. Uso de comillas simples y dobles
$cadena = "Yo soy tu padre";
$ygriega = $cadena[0];
echo "Primer carácter: $ygriega <br>";
echo 'Primer carácter: $ygriega <br>';



// 2. printf y sprintf
$num = 33;
$nombre = "Larry Bird";
printf("%s llevaba el número %d<br>", $nombre, $num);
$frase = sprintf("%s llevaba el número %d", $nombre, $num);
echo $frase . "<br>";


// 3. Mostrar números con formato
$num1 = 123.456;
$num2 = 1616.087;
printf("num1: %.2f, num2: %.0f<br>", $num1, $num2);


// 4. Funciones de cadena básicas
$cadena = "El caballero oscuro";
$tam = strlen($cadena);
echo "La longitud de '$cadena' es: $tam <br>";


$oscuro = substr($cadena, 13);
$caba = substr($cadena, 3, 4);
$katman = str_replace("c", "k", $cadena);
echo "$oscuro $caba ahora es: $katman <br>";
echo "Mayúscula: " . strtoupper($cadena) . "<br>";

// 5. ASCII functions
function despues(string $letra): string {
    return chr(ord($letra) + 1);
}
$letra = "B";
echo "Después de $letra, viene: " . despues($letra) . "<br>";

// 6. Limpiar cadenas
$cadena = " Programando en PHP ";
$limpia = trim($cadena);
$sucia = str_pad($limpia, 23, ".");
echo "$sucia <br>";

// 7. Comparaciones
$frase1 = "Alfa";
$frase2 = "Alfa";
$frase3 = "Beta";
$frase4 = "Alfa5";
$frase5 = "Alfa10";
echo strcmp($frase4, $frase5) . "<br>";
echo strnatcmp($frase4, $frase5) . "<br>";

// 8. Búsqueda en cadenas
$frase = "Quien busca encuentra, eso dicen, a veces";
$pos1 = strpos($frase, ",");
$pos2 = strrpos($frase, ",");
$trasComa = strstr($frase, ",");
echo "Primera coma en: $pos1, Última coma en: $pos2, Tras primera coma: $trasComa <br>";

// 9. Funciones ctype
$prueba1 = "hola";
$prueba2 = "hola33";
$prueba3 = "33";
$prueba4 = ",.()[]";
$prueba5 = " ,.()[]";
echo ctype_alpha($prueba1) . "<br>";
echo ctype_alnum($prueba2) . "<br>";
echo ctype_digit($prueba3) . "<br>";
echo ctype_punct($prueba4) . "<br>";
echo ctype_space($prueba5[0]) . "<br>";

// 10. Trabajando con subcadenas
$frase = "Hola,mundo,PHP";
$trozos = explode(",", $frase);
echo $trozos[0]. "<br>";
echo implode(" - ", $trozos) . "<br>";
?>
