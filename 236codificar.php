<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>236 - Codificar</title>
</head>
<body>
    <?php
        $letras = rellenarArray();
        $num=5;
        $arrayFinal = array_filter($letras, "desplazar");
        function rellenarArray(): array {
            for ($i = ord("A");$i<=ord("Z");$i++) {
                $arrayLetras[$i] = chr($i);
            }
            return $arrayLetras;
        }

        function desplazar($elemento)  {
            echo"Hola";
            if (ord($elemento)==90) {
                echo "-----------";
                return (chr(0));
            } else {
                echo"Mundo";
                return chr(ord($elemento)+2);
            }
        }



        print_r($letras);
    
    ?>
</body>
</html>