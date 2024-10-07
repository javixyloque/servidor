<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   

    // A UNA FUNCION SE LE PUEDE PASAR UNA FUNCIÓN COMO PARÁMETRO

    function calculador($operacion, $numa, $numb){        
        $resul = $operacion($numa, $numb);
        return $resul;
    }

    function sumar($a, $b){
        return $a + $b;
    }

    function multiplicar($a, $b){
        return $a * $b;
    }

    function restar ($a, $b) {
        return $a - $b;
    }

    function dividir ($a, $b) {
        if ($b ===0) {
            return "Chaval que no se puede dividir por cero";
        }
        return $a / $b;
    }   

    function potencia ($a, $b) {
        return $a**$b;
    }

    $a = 4;
    $b = 15;
    $r1 = calculador("multiplicar", $a, $b);
    echo "$r1 <br>";
    $r2 = calculador("sumar", $a, $b);
    echo "$r2 <br>";
    $r3 = calculador("restar", $a, $b);
    echo "$r3 <br>";
    $r4 = calculador ("dividir", $a, $b);
    echo "$r4 <br>";
    $r5 = calculador ("potencia", $a, $b);
    echo "$r5 <br>";
    ?>
    
</body>
</html>