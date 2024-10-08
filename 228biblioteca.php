<?php
declare(strict_types=1);   
    function sumar (float $numA,float $numB):float{
        return $numA+ $numB;
    }
    function restar (float $numA, float $numB):float {  
        return $numA - $numB;
    }
    function multiplicar (float $numA, float $numB): float{    
        return $numA * $numB;
    }

    function dividir (float $numA, float $numB):float{
        if ($numB===0) {
            echo "Se deben escribir divisores mas altos que 0";
        }
        return $numA / $numB;
    }

