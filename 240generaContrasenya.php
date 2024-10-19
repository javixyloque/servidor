<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>240 - Genera Contrasenya</title>
</head>
<body>
    <?php

        // AL GENERARLO DE ESTA FORMA, EL MAXIMO TAMAñO DE CONTRASEñA
        // ES COMO MUCHO 32(EN HEXADECIMAL), YA QUE EL HASH ES DE 128 BITS.
        // SE PODRIA HACER MAS LARGO EN BINARIO, PERO PARA CONTRASEñAS MEJOR NO 
        $tam = 6;

        function createPass ($size): string { 
            $pass = md5(rand(PHP_INT_MIN, PHP_INT_MAX), false);
            return substr($pass,0, $size);
        }
        echo"NUEVA CONTRASEÑA: <strong>". createPass ($tam)."</strong>";

    ?>
</body>
</html>