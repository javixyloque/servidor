<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocales</title>
</head>
<body>
    <form action="vocales.php" method="get">
        <label for="frase">Frase: </label>
        <input type="text" name="input" value=""><br><br>
        <input type="submit" value="Encontrar vocales"><br><br>
    </form>

    <?php
    $frase = isset($_GET['input']) ? $_GET['input'] : "";

    function devuelveVocales($frase) {
        $vocales = [
            "a" => 0,
            "e" => 0,
            "i" => 0,
            "o" => 0,
            "u" => 0
        ];
        $contadorTotal = 0;
        echo "$frase<br>";

            
            foreach ($vocales as $key => $value) {
                $value = substr_count($frase, $key);
                $contadorTotal += $value;
                echo "La vocal ".$key." aparece ".$value." veces<br>";
                
            }
            

            // for ($j = 0;$j <count($vocales); $j++) {
            //     if ($frase[$i] == $vocales[$j]) {
            //         $vocales[$j]++;
            //         $contadorTotal++;
            //     }
            // }
        
        
        // return $vocales;
    }
    devuelveVocales($frase);
    // print_r(devuelveVocales($frase));


    ?>
</body>
</html>