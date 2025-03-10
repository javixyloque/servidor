<?php
declare (strict_types = 1);
// crea las siguientes funciones:

// Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
function mayor(int ...$nums): int {
    var_dump($nums);
    $mayor = $nums[0];
    foreach ($nums as $num) {
        if ($num > $mayor) {
            $mayor = $num;
        }
    }
    return $mayor;

}

echo ( mayor(5,15,16,16,83,1,96,34,56,197,89)) ;
echo "<br><br>";


// Una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ....

function concatenar(...$palabras): string {
    // IMPLODE => CREAR STRING DE ARRAY O DE OTROS STRINGS;
    // EXPLODE => CREAR ARRAY DE STRINGS (SEPARADOR)
    return implode(' ', $palabras);
}

echo concatenar("manolo", "es", "gay");
?>