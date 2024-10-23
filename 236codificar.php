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
        $num=0;
        // $arrayFinal = array_walk($letras, "desplazar", $num);
        $input = "Jose come canicas cuando se aburre en su casa";
        // for ($i = 0; $i < strlen($input); $i++) {
        //     echo ord($input[$i]);
        // }
        
        
        function cambiar($input, $num):string {
            $output = "";
            for ($i = 0;$i<strlen($input);$i++) {
                
                if (ord($input[$i]) == 32) {
                    $output.=' ';
                    $i++;
                    
                }

                // LA DECLARO DESPUES PORQUE SI NO SE COME LA PRIMERA LETRA DESPUES DEL ESPACIO SIEMPRE.
                // AL DECLARARLA ARRIBA, YA ESTA ASIGNADA Y ACTUALIZAR LA I NO SIRVE DE NADA
                
                $codigo = ord($input[$i]);
                
                if ($codigo > 64 && $codigo<91) {
                    $temp = $codigo +$num;
                 //} else if () {
                    if ($temp >90) {
                        $temp-=26;
                    }
                    $output .= chr($temp);
                    
                
                }else if ($codigo > 96 && $codigo < 123) {
                    $temp = $codigo + $num;
                    if ($temp > 122) {
                        $temp -= 26;  
                    }
                    $output .= chr($temp);
                }

            }
            return $output;             
        }
        

        echo cambiar($input, $num);

    
    ?>
</body>
</html>