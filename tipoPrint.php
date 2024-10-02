
<?php
    /* declaración de variables */
    $entero = 4; // tipo integer
    $numero = 4.5;   // tipo coma flotante
    $cadena = "cadena"; // tipo cadena de caracteres
    $bool = true; 
    $a = 5;
    echo gettype($a);
    echo "<br>";
    $a = "Hola";
    echo gettype($a);

    // Las comillas simples con la variable imprimen el nombre de la variable
    // Las comillas dobles con la variable imprimen el valor de la misma
    
    echo 'Nombre: $entero'. ", valor: $entero, tipo: ";
    echo gettype($entero)."<br>";

    echo 'Nombre: $numero'. ", valor: $numero, tipo: ";
    echo gettype($numero)."<br>";

    echo 'Nombre: $cadena '.", valor: $cadena, tipo: ";
    echo gettype($cadena)."<br>";

    echo 'Nombre: $bool,' .", valor: $bool, tipo: ";
    echo gettype($bool)."<br>";





