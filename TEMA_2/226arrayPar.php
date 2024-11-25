<?php
declare(strict_types=1);

    function esPar(int $num): bool {
        if ($num%2 === 0) {
            return true;
        } else {
            return false;
        }
    }

    function arrayAleatorio (int $tam, int $min, int $max): array {
        $arrFinal = [];
        for ($i=0; $i < $tam; $i++) {
            array_push($arrFinal, rand($min, $max));
        }
        return $arrFinal;
    }

    function arrayPares (array &$nums): int {
        $contador =0;
        foreach ($nums as $numero) {
            if (esPar($numero)) {
                $numero = 0;
                $contador++;
            }
        }
        return $contador;
    }
    echo "<h2>Es par el numero 18? </h2>";
    var_dump(esPar(18));
    echo "<br><h2>Array aleatorio: </h2><br>";
    $arr = arrayAleatorio (8, 0, 100);
    print_r($arr);
    echo "<br><h2>Cuantos pares tiene el Array aleatorio? </h2><br>";
    echo arrayPares($arr);
    

?>
