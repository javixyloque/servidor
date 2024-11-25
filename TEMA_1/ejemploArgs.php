<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        function sumaParametros() {
            if (func_num_args() == 0) {
                return false;
            } else {
                $numeros = func_get_args(); // NO HACE FALTA ASIGNARLE EL VALOR A UNA VARIABLE
                                            // SE PUEDE LLAMAR A LA FUNCION TAMBIEN DENTRO DEL PROPIO FOREACH
                $suma = 0;
                foreach ($numeros as $num) {
                    $suma+=$num;
                }
                return $suma;
            }
        }
    echo sumaParametros(1, 5, 9); // 15
    ?>

    <?php
        // PARA PASARLE PARAMETROS EN UN ARRAY LOS ... CONVIERTEN TODOS LOS PARAMETROS EN UN ARRAY
        function sumaParametrosMejor(...$numeros) {
            if (count($numeros) == 0) {
            return false;
        } else {
            $suma = 0;
            foreach ($numeros as $num) {
                $suma += $num;
            }
            return $suma;
        }
    }
    echo sumaParametrosMejor(1, 5, 9); // 15
    ?>
    <?php
    

    function suma(int $a, int $b) : int {
        return $a + $b;
    }

    $num = 33;
    echo suma(10, 30);
    echo suma(10, $num);
    echo suma("10", 30); // error por tipificación estricta, sino daría 40
    ?>
</body>
</html>