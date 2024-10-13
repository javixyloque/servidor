<?php
declare(strict_types=1);

    function digitos (int $num): int {
        return strlen((string)$num);
    }


    function digitoN (int $num, int $pos): int {
        $cadena = (string)$num;
        return (int)$cadena[$pos];
    }
    

    function quitaPorDetras(int $num, int $cant): int {
        $cadena = (string)$num;
        $modificado = substr($cadena, 0, -$cant);
        return (int)$modificado;
    }


    function quitaPorDelante (int $num, int $cant): int {
        $cadena = (string)$num;
        $modificado = substr($cadena, $cant, strlen($cadena));
        return (int)$modificado;
    }

    $arrFunciones = ["digitoN", "quitaPorDetras", "quitaPorDelante"];
    echo "Cuantos digitos tiene 1726? ".digitos(1726)."<br>";
    foreach ($arrFunciones as $func) {
        echo $func." = ".$func(1726, 2)."<br>";
    }

