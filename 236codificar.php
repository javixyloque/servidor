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
        // $letras = rellenarArray();
        $num=5;
        $arrayFinal = array_walk($letras, "desplazar", $num);
        $input = "Jose come canicas cuando se aburre en su casa";
        

        function rellenarArray($num): array {
            for ($i = ord("A");$i<=ord("Z");$i++) {
                $input[$i] = chr($i);
            }
            desplazar($num);
        }

        function desplazar($elemento)  {
            echo"Hola";
            // switch (ord($elemento)) {
            //     case 32:
            //         return '';
            //     case 90:
            //         $elemento = chr(65);
            // }
            if ($elemento == '') {
                return ' ';
            }
            if (ord($elemento)==90) {
                echo "-----------";
                return (chr(64)+$num);
            } else {
                echo"Mundo";
                return chr(ord($elemento)+$num);
                
            }
        }



        print_r($arrayFinal);
    
    ?>
</body>
</html>