<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Javi" content="Javier Alvarez Centeno">
    <title>230 - Frase Impares</title>
</head>
<body>
    <?php
    $frase = "Hola buenas tardes soy maria jesus";
    function fraseImpares($frase):string {
        $fraseCompleta = "";
        for ($i = 0; $i<strlen($frase)-1; $i++) {
            if ($i%2===1){
                $fraseCompleta.=$frase[$i];
            }
                
            
        }
        return $fraseCompleta;
    }
    
    echo fraseImpares($frase);

    ?>
</body>
</html>