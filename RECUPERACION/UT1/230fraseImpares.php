<?php
// Lee una frase y devuelve una nueva con solo los caracteres de las posiciones impares.

$frase = "El coche corre";

$nuevaFrase = "";


for ($i = 0; $i<strlen($frase); $i++) {
    // HAY ESPACIO? SE PONE ESPACIO (AUNQUE SEA PAR)
    if ($frase[$i] == " ") {
        $nuevaFrase.= " ";
        continue; 
    }
    if ($i % 2 === 1) {
        $nuevaFrase.= $frase[$i];
    }

}

echo $frase. "<br><br>";
echo $nuevaFrase; 


?>