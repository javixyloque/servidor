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
        // SE PODRIA HACER MAS LARGO EN BINARIO, PERO PARA CONTRASEñAS MEJOR HEXADECIMAL 
        $tam = 54;

        function createPass ($size): string { 
            $pass = "";

            for ($i = 0; $i < $size; $i++)  {
                // PARA QUE SEA MAS IMPREDECIBLE, CADA PASO DEL BUCLE GENERA UN MD5 DE UNA MINUSCULA
                // Y OBTIENE UN CARACTER EN UN INDICE ALEATORIO DE ESOS 32 CARACTERES HEXADECIMALES
                $temp= md5(chr(rand(97, 122)));
                $pass.=$temp[rand(0, 31)];
            }
            return $pass;
        }
        echo"NUEVA CONTRASEÑA: <strong>". createPass ($tam)."</strong>";

    ?>
</body>
</html>