<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>219 - array fm</title>
</head>
<body>
    <?php
        $letras = [];
        $sorteo;
        for($i = 0; $i<100; $i++) {
            $sorteo = rand(1, 2);
            if ($sorteo === 1) {
                array_push($letras, "F");
            } else {
                array_push($letras, "M");
            }
        }
        print_r($letras);
        echo "<br><br><br>";
        $asocLetras = [
                'M' => count(array_filter($letras, function ($i) {
                    return $i =="M";})),
                'F' => count(array_filter($letras, function ($s) {
                    return $s =="F";}))
        ];
        var_dump($asocLetras);
            
            // NO HACE FALTA EL FOREACH, CON FILTER FUNCIONA


        // foreach($letras as $letra) {
        //     if ($letra == "M") {
        //         $asocLetras["M"]++;
        //     } else if ($letra == 'F') {
        //         $asocLetras["F"]++;
        //     }
        // }
        

        
        
        
    ?>
</body>
</html>