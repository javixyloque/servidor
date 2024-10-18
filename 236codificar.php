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
        $num=15;
        // $arrayFinal = array_walk($letras, "desplazar", $num);
        $input = "Jose come canicas cuando se aburre en su casa";
        // for ($i = 0; $i < strlen($input); $i++) {
        //     echo ord($input[$i]);
        // }

        function cambiar(&$input, $num) {
            for ($i = 0;$i<strlen($input);$i++) {
                // $input[$i] = chr($i+$num);
                $codigo =ord($input[$i])+$num;
                if ($codigo == 32) {
                    echo ' ';
                    $i++;
                }
                if ($codigo>90) {
                    echo (chr($codigo-26));
                } else if ($codigo>122) {
                        echo chr($codigo-26);
                    
                } else {
                    echo chr($codigo+$num);
                }
            }
            
        }
        function comprobar(&$input, $num) {

        }

        cambiar($input, $num);

        // function desplazar(&$elemento, $num)  {
        //     echo"Hola";
        //     // switch (ord($elemento)) {
        //     //     case 32:
        //     //         return '';
        //     //     case 90:
        //     //         $elemento = chr(65);
        //     // }
        //     if ($elemento == ' ') {
        //         return ' ';
        //     }
        //     if (ord(strtolower($elemento))==90) {

        //         return (chr(64)+$num);
        //     } else {

        //         return chr(ord($elemento)+$num);
                
        //     }
        // }

        

        // print_r($arrayFinal);
    
    ?>
</body>
</html>