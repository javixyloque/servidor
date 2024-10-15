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
    $fraseCompleta = "";
    
    for ($i = 0; $i<strlen($frase)-1; $i+=2) {
        
            $fraseCompleta.=$frase[$i];
        
    }
    echo $fraseCompleta;

    ?>
</body>
</html>