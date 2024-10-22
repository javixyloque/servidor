<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="ejercicio5_JavierAlvarezCenteno" method="get">
        <label for="palabra">Inserte su palabra</label>
        <input type="text" name="insert">
        <input type="submit" value="Comprobar">
    </form>

    <?php

    $palabra = isset($_GET['insert'])? $_GET['insert']: '';

    

    if (strlen($palabra)!=4) {
        echo "La palabra debe ser de 4 letras";
        
    } else {
        compruebaAnagrama($palabra);
    }
    

    function compruebaAnagrama($pal) {
        $palabraComp = strtolower($pal);
        $anagrama = "";
        for ($i = 0; $i<=$pal; $i++) {
            $anagrama.= chr(random_int(97, 122));
        }

        $palabraOrd = ordenaCadena($palabraComp);
        $anagramaOrd = ordenaCadena($anagrama);

        if ($palabraOrd ==$anagramaOrd) {
            return "La palabra $pal es anagrama de $anagrama";
        } else {
            return "Las palabras $pal y $anagrama no son anagramas";
        }


    }

    function ordenaCadena ($cadena) {
        $cadenaOrd = $cadena;
        for ($i = 0; $i < strlen($cadenaOrd)-1; $i++) {
            for ($j = 0; $j < count($cadenaOrd)-1; $j++) {  
                if (ord($cadenaOrd[$j]) < ord($cadenaOrd[$j+1])) {
                    $palTemp = $cadenaOrd[$j];
                    $cadenaOrd[$j] = $cadenaOrd[$j+1];
                    $cadenaOrd[$j+ 1] = $palTemp;
                }            
            }
        }
        return $cadenaOrd;
    }

    echo compruebaAnagrama($palabra);
    

    ?>
</body>
</html>